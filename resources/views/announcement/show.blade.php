<!DOCTYPE html>
<html lang="en">
<head>
  <title>Employee</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">
<form method="post" action=""class="form-horizontal">
<fieldset>

<!-- Form Name -->
<legend>公告資料</legend>
<a href="/announcement" class="btn btn-md btn-success pull-right">返回上一頁</a>
<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="firstName">公告標題:</label>  
  <div class="col-md-4">
  <input id="title" name="title" value="{{$announcement->title}}"type="text" placeholder="" class="form-control input-md" disabled="disabled">
    
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="公告內容">Last Name:</label>  
  <div class="col-md-4">
  <input id="content" name="content" value="{{$announcement->content}}" type="text" placeholder="" class="form-control input-md" disabled="disabled">
    
  </div>
</div>
