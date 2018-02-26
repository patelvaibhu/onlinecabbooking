
<!DOCTYPE html>
<html>
<head>
    <title>City</title>
    <!-- metatags-->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="keywords" content="Sports Camp Registration Form a Flat Responsive Widget,Login form widgets, Sign up Web 	forms , Login signup Responsive web form,Flat Pricing table,Flat Drop downs,Registration Forms,News letter Forms,Elements" />
    <script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
        function hideURLbar(){ window.scrollTo(0,1); } </script>
    <!-- Meta tag Keywords -->
    <!-- css files -->
    <link rel="stylesheet" href="admin/city/css/jquery-ui.css"/>
    <link href="admin/city/css/style.css" rel="stylesheet" type="text/css" media="all"/><!--stylesheet-css-->
    <link href="//fonts.googleapis.com/css?family=Josefin+Sans:100,100i,300,300i,400,400i,600,600i,700,700i" rel="stylesheet">
    <link href="//fonts.googleapis.com/css?family=PT+Sans:400,400i,700,700i" rel="stylesheet">

    <!-- //css files -->
</head>
<body>
<h1>Sports Camp Registration Form</h1>
<div class="w3l-main">
    <div class="w3l-from">
        <form action="#" method="post">

                <div class="clear"></div>
                <div class="pickupcity">
                    <label class="head">Pickup City<span class="w3l-star"> * </span></label>
                    <select class="form-control" required="">
                        <option>Vadodara</option>
                        <option>Vasad</option>
                        <option>Anand</option>
                        <option>Ahemdabad</option>
                    </select>
                </div>
                <div class="w3l-options2">
                    <label class="head">Drop City<span class="w3l-star"> * </span></label>
                    <select class="dropcity" required="">
                        <option value="">vadodara</option>
                        <option value="">Vasad</option>
                        <option value="">Anand</option>
                        <option value="">Ahemdabad</option>
                    </select>
                </div>
                <div class="clear"></div>

            <div class="w3l-num">
                <label class="head">PICK UP TIME<span class="w3l-star"> * </span></label>
                <input type="text"  name="City" placeholder="" required="">
            </div>
            <div class="w3l-date">
                <label class="head">PICK UP DATE<span class="w3l-star"> * </span></label>
                <div class="styled-input">
                    <input class="date" id="datepicker" name="Text" type="text" value="MM/DD/YYYY" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'MM/DD/YYYY';}" required="">
                </div>
            </div>
            <div class="w3l-sym">
                <label class="head">TRAVEL TYPE<span class="w3l-star"> * </span></label>
                <input type="text" name="State" placeholder="" required="">
            </div>
                <div class="btn">
                    <input type="submit" name="submit" value="Submit"/>
                </div>

            <div class="clear"></div>
        </form>
    </div>
</div>
<!-- Default-JavaScript --> <script type="text/javascript" src="admin/city/js/jquery-2.1.4.min.js"></script>
<!-- Calendar -->
<script src="admin/city/js/jquery-ui.js"></script>
<script>
    $(function() {
        $( "#datepicker,#datepicker1" ).datepicker();
    });
</script>
<!-- //Calendar -->

</body>
</html>