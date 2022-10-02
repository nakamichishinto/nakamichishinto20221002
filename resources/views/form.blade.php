<style>
  .title {
    text-align:center;
  }

  .contact-form {
    width:70%;
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
		width:30%;
	}
	.contact-form td{
		width:70%;
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
    margin: 40px auto;
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
</style>

<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <link rel="stylesheet" href="/css/form.css" >
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <script src="https://ajaxzip3.github.io/ajaxzip3.js" charset="UTF-8"></script>
  <link rel="stylesheet" href="/css/form.css" >
  <title>COACHTECH</title>
</head>

<body>
  <h1 class="title">お問い合わせ</h1>
  <div class="contact-form">
  <form action="/confirm" method="post">
    @csrf
    <table>
      <tr>
        <th>お名前<span>※</span></th>
        <td><input type="text" name="fullname" value="{{old('fullname')}}">
      @if ($errors->has('fullname'))
          {{$errors->first('fullname')}}
      @endif
        </td>
      </tr>

      <tr>
        <th>性別<span>※</span></th>
        <th><input type="radio" name="gender" value="1" checked>男性
        <input type="radio" name="gender" value="2">女性</th>
      </tr>

      <tr>
        <th>メールアドレス<span>※</span></th>
        <th><input type="text" name="email" value="{{old('email')}}">
        @if ($errors->has('email'))
          {{$errors->first('email')}}
        @endif
        </th>
      </tr>

      <tr>
        <th>郵便番号<span>※</span></th>
        <th><input type="text" name="postcode" value="{{old('postcode')}}" onKeyUp="AjaxZip3.zip2addr('postcode','','address','address');" 
        @if ($errors->has('postcode'))
          {{$errors->first('postcode')}}
        @endif
        </td>
      </tr>

      <tr>
        <th>住所<span>※</span></th>
        <th><input type="text" name="address" value="{{old('address')}}" id="">
        @if ($errors->has('address'))
          {{$errors->first('address')}}
        @endif
        </td>
      </tr>

      <tr>
        <th>建物名</th>
        <th><input type="text" name="building_name" value="{{old('building_name')}}"></th>
        
      </tr>

      <tr>
        <th>ご意見<span>※</span></th>
        <td><textarea  name="opinion" value="">{{old('opinion')}}</textarea>
        @if ($errors->has('opinion'))
          {{$errors->first('opinion')}} 
        @endif
        </td>
      </tr> 
    </table>

    <button class="submit-btn" type="submit" value="確認">確認</button>
  </form>
</div>

</body>
</html>