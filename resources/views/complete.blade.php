<style>


.complete {
  width:300px;
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%,-50%);
}

p {
  text-align:center;
}

.submit-btn {
    display: flex;
    justify-content: center;
    margin: 40px auto;
    padding: 9px 20px;
    width: 130px;
    border: 2px solid;
    font-size: 8px;
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
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>COACHTECH</title>
</head>

<body>
  <form action="/complete" method="get">
  <div class="complete">
    <p>ご意見ありがとうございました</p>
    <div>
      <button class="submit-btn">トップページへ</button>
    </div>
  </div>
  </form>
</body>