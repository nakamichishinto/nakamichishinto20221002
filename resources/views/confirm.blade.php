<style>
  .title {
    text-align:center;
  }
  .contact-form {
    width:60%;
    margin:0 auto;
  }

  span {
    color:red;
  }

  .contact-form table{
		width:100%;
    margin-bottom:15px;
  }

	.contact-form th{
		text-align:left;
		width:40%;
	}

	.contact-form td{
		width:60%;
	}

  .contact-form input:not(input[type="radio"]), .contact-form textarea{
    width:100%;
  }
  .contact-form input:not(input[type="radio"]){
    height:35px;
  }
  .contact-form textarea{
    height:100px;
  }

  .contact-form th{
    padding:15px 0;
    vertical-align:top;
  }

  .submit-btn {
    display: flex;
    justify-content: center;
    margin: 0 auto;
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
    padding: 9px 20px;
    width: 100px;
    font-size: 12px;
    font-weight: 700;
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
    <h1 class="title">内容確認</h1>
    
  <form action="/create" method="post">
    @csrf
  <div class="contact-form">
    <table>
      <tr>
        <th>お名前</th>
        <td>
          <input type="hidden" name="fullname" value="{{$contact->fullname}}"> </input>
          {{$contact->fullname}}
        </td>
      </tr>

      <tr>
        <th>性別</th>
        <td>
          <input type="hidden" name="gender" value="{{$contact->gender}}"></input>
          @if ($contact->gender === '1')
          <p>男性</p>
          @else 
          <p>女性</p>
          @endif
        </td>
      </tr>

      <tr>
        <th>メールアドレス</th>
        <td>
          <input type="hidden" name="email" value="{{$contact->email}}"></input>
          {{$contact->email}}
        </td>
      </tr>

      <tr>
        <th>郵便番号</th>
        <td>
          <input type="hidden" name="postcode" value="{{$contact->postcode}}"></input>
          {{$contact->postcode}}
        </td>
      </tr>

      <tr>
        <th>住所</th>
        <td>
          <input type="hidden" name="address" value="{{$contact->address}}"></input>
          {{$contact->address}}
        </td>
      </tr>

      <tr>
        <th>建物名</th>
        <td>
          <input type="hidden" name="building_name" value="{{$contact->building_name}}"></input>
          {{$contact->building_name}}
        </td>
      </tr>

      <tr>
        <th>ご意見</th>
        <td>
          <input type="hidden" name="opinion" value="{{$contact->opinion}}"></input>
          {{$contact->opinion}}
        </td>
      </tr>
    </table>
  </div>  

      <input type="submit" name="action" class="submit-btn" value="送信">
      <button type="submit" name="action" class="back" value="修正する">修正する

  </form>
</body>

</html>