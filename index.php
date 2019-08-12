<html>

<head>

    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="//libs.etsu.edu/shl-scan/css/style.css">

    <link rel="stylesheet" href="//libs.etsu.edu/shl-scan/css/native-toast.css">

    <style>
        ul#barcode_list li:first-child{
            background-color: red;
        }

        ul#barcode_list li:last-child{
            background-color: green;
        }

        ul#barcode_list:empty{
            opacity: 0;
        }

        ul#barcode_list{
            width: 100%;
            margin-left: 35%;
            margin-right: 35%;
            text-align: center;
            overflow-y: scroll;
            border: 2px solid #ccc;
            max-height: 500px;
            height: 475px;
        }

        h5{
            margin: 0 45% 0 46%;
        }

        .hide{
            position: absolute;
            top: -9999px;
            left: -9999px;
        }
    </style>


    <title>Anatomy Models - Scan In</title>

    <script>

        // function showAlert(al_type, al_message){
        //
        //     nativeToast({
        //         message: al_message,
        //         type: al_type,
        //         position: 'bottom',
        //         timeout: 7000
        //     })
        // }




    </script>


</head>

<body>

<div class="container-fluid">

    <!--  Toast   -->

    <div aria-live="polite" aria-atomic="true"  style="position: relative;">
        <!-- Position it -->
        <div style="    position: absolute; top: 15px;/* bottom: -100%; */right: 0; width: 24%;">

            <!-- Then put toasts within -->
            <div class="toast shadow-lg p-3 mb-5 bg-white rounded" id="myToast" role="alert" aria-live="assertive" aria-atomic="true" data-autohide="true">
                <div class="toast-header">
                    <!--                    <img src="..." class="rounded mr-2" alt="...">-->
                    <svg class="bd-placeholder-img rounded mr-1" width="20" height="20" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid slice" focusable="false" role="img"><rect width="100%" height="100%" fill="#009900"></rect></svg>
                    <strong class="mr-auto">Anatomy Models Count</strong>
                    <small class="text-muted">just now</small>
                    <button type="button" class="ml-2 mb-1 close" data-dismiss="toast" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="toast-body">
                    Item counted. Thanks
                </div>
            </div>
        </div>
    </div>


    <div class="row">
        <div class="col-md-12" id="form_section">
            <div class="text-center" id="">
                <img src="//libs.etsu.edu/shl-scan/images/Sherrod_color_h.png" alt="Sherrod Library Logo" class=""/>
            </div>

            <div class=" jumbotron jumbotron-fluid" style="margin: 0 35px 0 0px;">
                <p class="lead">
                <form action="" method="POST" id="frm-anatomy" class="">
                    <div class="form-group">
                        <label for="barcode_id"></label>

                        <div class="col-md-8 offset-md-2">
                            <input autocomplete="off" name="barcode" type="text" class="form-control form-control-lg" id="barcode_id" placeholder="Item barcode goes here" autofocus>
                        </div>

                    </div>
                </form>
                </p>
            </div>
        </div>
    </div>

    <div class="row" style="margin-top: -100px">
        <h5 class="mb-1">Scan Queue</h5>
        <ul class="list-group list-group-flush" id="barcode_list">
<!--            <li class="list-group-item">Cras justo odio</li>-->
        </ul>
    </div>


</div>


<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
<script>
//
//    $(document).ready(function () {
//        //$('#barcode_id').focus();
//        //console.log("Focused");
//
//
//    });

    $('#frm-anatomy').submit(false);

    $("#barcode_id").bind("keydown change paste keyup", function() {
        //console.log("Change");
        let _barcode = $( "#barcode_id" ).val();
        if (_barcode.length === 14){
            setTimeout(function () {
                $('#frm-anatomy').submit();
                console.log("Yes");
            }, 2000);
            // $("#barcode_id").val('');
            // $('#barcode_list').append('<li class=\'list-group-item\'>' + _barcode + '</li>');
        }
    });



    //var values  = [];


    $( "#frm-anatomy" ).submit(function( event ) {
        //$("input").prop('disabled', true);
        //event.preventDefault();
        let _barcode = $( "#barcode_id" ).val();
        //$("#barcode_id").val('');
        $('#barcode_list').append('<li class=\'list-group-item\'>' + _barcode + '</li>');
        // $('.toast').toast('show');
        // $("#myToast").toast({
        //     delay: 30000
        // });

        //values.push(_barcode);
        //$("input").prop('disabled', false);
        $("#barcode_id").val('');
        // $('#barcode_id').focus();
        // $.get( "https://libs.etsu.edu/shl-scan/sh_proxy.php?barcode_id=" +_barcode , function (data) {
        //     //console.log("Success");
        //     console.log(data);
        // });

        //https://libs.etsu.edu/scanv2_dev/logger.php?barcode_id=
        //https://libs.etsu.edu/shl-scan/sh_proxy.php?barcode_id=222
        //console.log(values.toString());
        return false;
    });

    // setInterval(function () {
    //     let count =  $("#barcode_list li").length;
    //     if (count > 0){
    //         $("ul#barcode_list li:first-child").remove();
    //         $("#myToast").toast({ delay: 3000 });
    //         $("#myToast").toast('show');
    //     }
    // }, 5000);

    // setInterval(function () {
    //     let count =  $("#barcode_list li").length;
    //     if (count === 0){
    //         location.reload();
    //     }
    // }, 60000);



    // $.each(values, function (key, value) {
    //    console.log(value);
    // });
</script>


</body>

</html>
