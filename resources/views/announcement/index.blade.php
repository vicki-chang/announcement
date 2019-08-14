<!DOCTYPE html>
<html lang="en">
<head>
  <title>公告</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">
  <h2>公告列表 </h2>
    @if(isset(Auth::user()->email))
        <a href="/main/logout" class="btn btn-dark pull-right">登出</a>
        <p align="right"><strong>Welcome {{ Auth::user()->email }}</strong></p>
        <br />
        @if((Auth::user()->book) == 0)
        <a href="/main/book/{{Auth::user()->id}}" class="btn btn-md btn-warning pull-right"><span class="glyphicon glyphicon-pencil"></span>訂閱公告</a>
        @else
        <a href="/main/unbook/{{Auth::user()->id}}" class="btn btn-md btn-danger pull-right"><span class="glyphicon glyphicon-pencil"></span>取消訂閱公告</a>
        @endif  
        <a href="/announcement/create" class="btn btn-md btn-success pull-right">新增</a>
       
    @else
        <a href="/main" class="btn btn-dark pull-right">登入</a>
    @endif        
    <br />
    <div>
    
    </div>
  <table class="table table-hover">
    <thead>
    <tr>
        <th>公告</th>
        <th>公告內容</th>
        <th>&nbsp;</th>
    </tr>        
    </thead>
    <tbody>

    <tr>
    @foreach ($announcementList as $announce)
        <td><img src="/images/broadcast.png">{{$announce->title}}</td>
        <td>{{$announce->content}}</td>
        <td>
            <span class="pull-right">
            @if(isset(Auth::user()->email))
                <form method="post" action="/announcement/{{$announce->id}}"> 
                    <a href="/announcement/{{$announce->id}}/edit" class="btn btn-xs btn-info"><span class="glyphicon glyphicon-pencil"></span> 修改</a> | 
                    @csrf
                    @method('DELETE') {{--delete action--}}
                    <button type="submit" class="btn btn-xs btn-danger"><span class="glyphicon glyphicon-remove"></span> 刪除</button>
                </form>
            @else
            <a href="/announcement/{{$announce->id}}" class="btn btn-xs btn-info"><span class="glyphicon glyphicon-pencil"></span>檢視</a>
            @endif 
            </span>
        </td>
    </tr>
    @endforeach
    </tbody>
  </table>
</div>

</body>
</html>