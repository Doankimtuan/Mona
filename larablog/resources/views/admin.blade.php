<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Document</title>

  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
  <style>
    a {
      text-decoration: none;
      color: white;
    }

    a:hover {
      color: #CCCECF;
      text-decoration: none;
    }

    .navbar-top {
      position: fixed;
      top: 0;
      z-index: 990;
      margin-bottom: 20px;
    }

    .row_first_col3 {
      border-right: 1px lightgrey solid;
      background-color: #F8F9FA;
      color: #AFAFAF;
    }

    .row_first_col9 {
      margin-top: 20px;
    }

    li {
      margin-top: 20px;
      font-size: 15px;
    }

    li:hover {
      color: black;
    }

    li:nth-child(1) {
      color: blue;
    }

    .chart {
      margin-top: 20px;
      margin-bottom: 20px;
      background-color: lightskyblue;
      height: 300px;
      width: 100%;
    }
  </style>
</head>

<body>
  <!--top-->
  <div class="container-fluid bg-dark text-white navbar-top">
    <div class="row">
      <div class="col-2 d-flex align-items-center">
        <h6>Company Name</h6>
      </div>
      <div class="col-8 p-0 d-flex align-items-center">
        <input class="form-control form-control-dark w-100" type="text" placeholder="Search">
      </div>
      <div class="col-2 d-flex align-items-center justify-content-center">
        <h6><a href="">Admin Logout</a></h6>
      </div>
    </div>
  </div>
  <!--done top-->

  <!--body-->
  <div class="container-fluid mt-5">
    <div class="row">
      <div class="col-2 d-flex flex-column row_first_col3">
        <ul class="list-unstyled list">
          <li>Dashboard</li>
          <li>Orders</li>
          <li>Products</li>
          <li>Customers</li>
          <li>Reports</li>
          <li>Integrations</li>
          <h6 class="my-4 text-dark">SAVED REPORTS</h6>
          <li>Current month</li>
          <li>Last quarter</li>
          <li>Social engagement</li>
          <li>Year-end sale</li>
        </ul>
      </div>
      <div class="col-1"></div>
      <div class="col-9 row_first_col9">
        <div class="d-flex justify-content-between">
          <h3>Dashboard</h3>
          <div class="btn-group btn-group-toggle" data-toggle="buttons">
            <label class="btn btn-outline-secondary">Share
            </label>
            <label class="btn btn-outline-secondary">Export
            </label>
            <label class="btn btn-outline-secondary mx-2">This weekend</label>
          </div>
        </div>
        <div class="chart"></div>
        <h3>Products</h3>
        <div class="table">
          <table class="table">
            <thead>
              <tr>
                <th scope="col">#</th>
                <th scope="col">Name</th>
                <th scope="col">Description</th>
                <th scope="col">Price</th>
                <th scope="col">Promotion price</th>
              </tr>
            </thead>
            <tbody>
              @foreach($products as $prd)
              <tr>
                <th scope="row">{{$prd->id}}</th>
                <td>{{$prd->name}}</td>
                <td>{{$prd->description}}</td>
                <td>{{$prd->price}}</td>
                <td>{{$prd->promotion_price}}</td>
              </tr>
              @endforeach
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>
  <!--done body-->
</body>

</html>