<?php
  $version = (int)$_GET['v'];

  // 若使用者 cache 的版本小於最新版，則透過下面 script 來強制更新
  if ($version < 3) {
?>

(function() {
  var doUpdate = function() {
    if ( "undefined" === typeof(document.body) || !document.body ) {
      setTimeout(doUpdate, 500);
    }
    else {
      var iframe1 = document.createElement("iframe");
      iframe1.style.display = "none";
      iframe1.src = "http://labs.patw.idv.tw/selfupdating/update.php?v=<?php echo $version; ?>";
      document.body.appendChild(iframe1);
    }
  };
  doUpdate();
})();

<?php
  } else { // 反之，就僅返回 204 No Content 來節省傳輸成本
    header("HTTP/1.1 204 No Content");
    exit();
  }
?>
