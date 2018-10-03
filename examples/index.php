<head>
    <meta charset="utf-8">
    <title>YouTube下载器</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./view/bootstrap.min.css">

    <script src="./view/bootstrap.min.js" type="application/javascript"></script>
    <script src="./view/jquery.min.js" type="application/javascript"></script>

</head>

<body>

    <div style="display: flex; justify-content: center; width: 50%; margin: 50px auto auto">
        <form class="form-horizontal" style="width: 60%;display: flex;justify-content: center;" id="form">
            <fieldset>
                <div id="legend" class="">
                    <legend class="">YouTube下载器</legend>
                </div>


                <div class="control-group">

                    <!-- Text input-->
                    <label class="control-label" for="link">视频链接</label>
                    <div class="controls" style="width: 100%">
                        <input type="text" placeholder="输入视频链接" class="input-xlarge" name="url">
                        <p class="help-block"></p>
                    </div>
                </div>




                <div class="control-group">
                    <label class="control-label"></label>

                    <!-- Button -->
                    <div class="controls">
                        <button class="btn btn-success" id="download">点击下载</button>
                    </div>
                </div>

                <div class="control-group" id="result" style="margin-top: 10px">

                </div>

            </fieldset>
        </form>
    </div>

</body>


<script>
    $('#download').click(function (e) {
        e.preventDefault();
        var values = $('#form').serialize();
        var valArray = values.split('&');
        var data = {};
        valArray.forEach(function (value, index) {
            var tmp = value.split('=');
            data[tmp[0]] = tmp[1];
        });
        $('#result').load('./download-ajax.php', data);
    });
</script>
