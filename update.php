<!doctype html>
<html lang="en">
<head>
  <script src="http://labs.patw.idv.tw/selfupdating/bootstrap.js"></script>
</head>
<body>
  <script>
    if (location.hash === '') {
      location.hash = "check";
      location.reload(true); // 指定 true 以不使用 cache 強制重新載入
    }
  </script>
</body>
</html>
