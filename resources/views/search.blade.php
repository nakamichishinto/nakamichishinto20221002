<style>
  .title {
    text-align:center;
  }

  .search-table {
    width:90%;
    border:1px solid;
    margin:0 auto;
  }
  
  .search-table table {
    width:90%;
    padding:20px 10px;
  }
  
  .search-table th{
		text-align:left;
    padding-bottom:15px;
	}
  
  .search-table input:not(input[type="radio"]){
    height:30px;
  }

  .search-table input:not(input[type="radio"]), .contact-form textarea{
    width:80%;
  }

    .submit-btn {
    display: flex;
    justify-content: center;
    margin: 10px auto;
    padding: 9px 20px;
    width: 100px;
    border: 2px solid;
    font-size: 12px;
    font-weight: 700;
    border-radius:7px;
    text-decoration:none;
    background-color:black;
    color:white;
  }

  .back {
    border:none;
    background-color:white;
    display: flex;
    justify-content: center;
    margin: 0 auto;
    width: 100px;
    font-size: 12px;
    font-weight: 700;
  }

  .content-table table {
    width:100%;
    justify-content:space-around;
    table-layout: fixed;
    font-size:10px;
  }

  .content-table td {
    text-align:center;
  }

  .id {
    width:5%;
  }

  .name {
    width:10%;
  }

  .gender {
    width:5%;
  }

  .email {
    width:25%;
  }

  .opinion {
    width:40%;  
  }

  .content {
    width: 300px;  
	white-space: nowrap;  
	overflow: hidden;  
	text-overflow: ellipsis; 
  }

  svg.w-5.h-5 {
    width: 30px;
    height: 30px;
    }
  
</style>


<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>COACHTECH</title>
</head>

<body>
  <h1 class="title">管理システム</h1>
  <div class="search-table">
    <form action="/search" method="post">
      @csrf
      <table>
        <tr>
          <th>お名前</th>
          <th><input type="text" name="fullname" value="{{old('fullname')}}"></th>
          <th>性別</th>
          <th>
            <input type="radio" name="gender" value="1" checked>全て
            <input type="radio" name="gender" value="1">男性
            <input type="radio" name="gender" value="2">女性
          </th>
        </tr>
        <tr>
          <th>登録日</th>
          <th><input type="date" name="from"></input></th>
        </tr>
        <tr>
          <th>メールアドレス</th>
          <th><input type="text" name="email"></input></th>
        </tr>
        
      </table>
          <button class="submit-btn" type="submit" value="確認">検索</button>
          <div class="back">
            <a href="/">リセット</a>
          </div>
    </form>
  </div>

  <div class="content-table">
    <form action="/delete" method="post">
    <table>
      <tr>
        <th class="id">ID</th>
        <th class="name">お名前</th>
        <th class="gender">性別</th>
        <th class="email">メールアドレス</th>
        <th class="opinion">ご意見</th>
      </tr>
      @foreach ($posts as $post)
      @csrf
      <tr>
        <input type="hidden" name="id" value="{{$post->id}}"></input>
        <td>{{$post->id}}</td>
        <td>{{$post->fullname}}</td>
        <td>@if ($post->gender === 1)
          <p>男性</p>
          @else 
          <p>女性</p>
          @endif</td>
        <td>{{$post->email}}</td>
        <td >
          <p class="content">{{$post->opinion}}</p>
        </td>
        <td> <input type="submit" class="submit-btn" value="削除"></input></td>
      </tr>
      @endforeach
    </table>
    </form>
  </div>
</body>
</html>