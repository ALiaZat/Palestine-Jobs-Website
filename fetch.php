<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style/index.css">
    <!--glyphicon -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
    <script src="https://ajax.googleapis.com/ajax/libs/webfont/1.6.26/webfont.js" type="text/javascript"></script>

    <style>
        .page-item.active .page-link {
            background-color: #f58e5d;
            border-color: #f9b899;
        }
    </style>
</head>

<body>

</body>

</html>

<?php

$connect = new PDO("mysql:host=localhost; dbname=jobsdb", "nivalia", "niveen_alia_2021");

function get_total_row($connect)
{
    $query = "
  SELECT * FROM addjob WHERE review = 1
  ";
    $statement = $connect->prepare($query);
    $statement->execute();
    return $statement->rowCount();
}

$total_record = get_total_row($connect);

$limit = '5';
$page = 1;
if ($_POST['page'] > 1) {
    $start = (($_POST['page'] - 1) * $limit);
    $page = $_POST['page'];
} else {
    $start = 0;
}

$query = "
SELECT * FROM addjob WHERE review = 1
";

if ($_POST['query'] != '') {
    $query .= '
   AND jobTitle LIKE "%' . str_replace(' ', '%', $_POST['query']) . '%"  OR city LIKE "%' . str_replace(' ', '%', $_POST['query']) . '%" 
  ';
}

$query .= 'ORDER BY jobID ASC ';

$filter_query = $query . 'LIMIT ' . $start . ', ' . $limit . '';

$statement = $connect->prepare($query);
$statement->execute();
$total_data = $statement->rowCount();

$statement = $connect->prepare($filter_query);
$statement->execute();
$result = $statement->fetchAll();
$total_filter_data = $statement->rowCount();

$output = '
<label>Total Records - ' . $total_data . '</label>
';
if ($total_data > 0) {
    foreach ($result as $job) {
        $output .= '
    <div>
    <ul role="list" class="list-2">
    <li class="list-item">
        <div class="w-form">
            <form action="mostViewed.php?job_id=' . $job['jobID'] . '" method="post">
                <input type="submit" value="More Details" class="det-btn hollow-button" style="left: 41em;top: 19px;">
            </form>
        </div>
        <a href="https://www.facebook.com/" class="button w-button" style="left: 44.8em;top: 13px;">share/like</a>
        <div class="fea-info">
            <ul role="list" class="fea-list w-list-unstyled">
                <li class="fea-item" style="color:coral;font-weight: 600;font-size: 12px;margin-left: 16px;"><i class="fas fa-clock" style="margin-right: 5px;color:coral;"></i>' . $job['fl_pa_time'] . '</li>
                <li class="fea-item" style="font-weight: 600;font-size:15px;color:#6d6969;">' . $job['jobTitle'] . '</li>
                <li class="fea-item">' . $job['companyName'] . '</li>
                <li class="fea-item">
                    <i class="fas fa-map-marker-alt" style="margin-right: 5px;color: #6b6b6bc2;"></i> ' . $job['city'] . '
                    <p style="margin: 14px 0 10px;margin-left: 22px;"><i class="fas fa-shekel-sign" style="margin-right:5px;margin-left:10px;color: #6b6b6bc2;"></i>' . $job['salary'] . '</p>
                </li>
                <hr style="margin-bottom: 3px;margin-top: 1px;border-top: 1px solid #a5a0a09c;">
                <li class="fea-item" style="float:right;margin-right: 24px;"><i class="far fa-eye" style="margin-right: 5px;color: #6b6b6bc2;"></i> ' . $job['viewsNo'] . '</li>

            </ul>
        </div><img src="' . $job['image'] . '" loading="lazy" sizes="(max-width: 479px) 74vw, 184px" height="103" id="feature-img" alt="job image" class="feacure-img" />
    </li>
</ul>
</div>
    ';
    }
} else {
    $output .= '
  <br>
  <div class="alert alert-danger" style="font-size: 13px;background-color: #fff4e9;">
  No Data Found !
    </div>
 
  ';
}

$output .= '
</table>
<br /><br />
<div align="center">
  <ul class="pagination">
';

$total_links = ceil($total_data / $limit);
$previous_link = '';
$next_link = '';
$page_link = '';
$page_array = array();
//echo $total_links;

if ($total_links > 4) {
    if ($page < 5) {
        for ($count = 1; $count <= 5; $count++) {
            $page_array[] = $count;
        }
        $page_array[] = '...';
        $page_array[] = $total_links;
    } else {
        $end_limit = $total_links - 5;
        if ($page > $end_limit) {
            $page_array[] = 1;
            $page_array[] = '...';
            for ($count = $end_limit; $count <= $total_links; $count++) {
                $page_array[] = $count;
            }
        } else {
            $page_array[] = 1;
            $page_array[] = '...';
            for ($count = $page - 1; $count <= $page + 1; $count++) {
                $page_array[] = $count;
            }
            $page_array[] = '...';
            $page_array[] = $total_links;
        }
    }
} else {
    for ($count = 1; $count <= $total_links; $count++) {
        $page_array[] = $count;
    }
}

for ($count = 0; $count < count($page_array); $count++) {
    if ($page == $page_array[$count]) {
        $page_link .= '
    <li class="page-item active">
      <a class="page-link" href="#">' . $page_array[$count] . ' <span class="sr-only">(current)</span></a>
    </li>
    ';

        $previous_id = $page_array[$count] - 1;
        if ($previous_id > 0) {
            $previous_link = '<li style="background-color:#f37437;" class="page-item"><a class="page-link" href="javascript:void(0)" data-page_number="' . $previous_id . '">Previous</a></li>';
        } else {
            $previous_link = '
      <li class="page-item disabled">
        <a class="page-link" href="#">Previous</a>
      </li>
      ';
        }
        $next_id = $page_array[$count] + 1;
        if ($next_id >= $total_links) {
            $next_link = '
      <li class="page-item disabled">
        <a class="page-link" href="#">Next</a>
      </li>
        ';
        } else {
            $next_link = '<li class="page-item"><a class="page-link" href="javascript:void(0)" data-page_number="' . $next_id . '">Next</a></li>';
        }
    } else {
        if ($page_array[$count] == '...') {
            $page_link .= '
      <li class="page-item disabled">
          <a class="page-link" href="#">...</a>
      </li>
      ';
        } else {
            $page_link .= '
      <li class="page-item"><a  class="page-link" href="javascript:void(0)" data-page_number="' . $page_array[$count] . '">' . $page_array[$count] . '</a></li>
      ';
        }
    }
}

$output .= $previous_link . $page_link . $next_link;
$output .= '
  </ul>

</div>
';

echo $output;

?>