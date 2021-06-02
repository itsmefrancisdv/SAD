<html>

    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
        <title>LazeRosa - Customer Purchase Order</title>
        <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i">
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=ABeeZee">
        <link rel="stylesheet" href="assets/css/Jost.css">
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans">
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,700">
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto+Slab:300,400">
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro">
        <link rel="stylesheet" href="assets/fonts/fontawesome-all.min.css">
        <link rel="stylesheet" href="assets/fonts/material-icons.min.css">
        <link rel="stylesheet" href="assets/css/breadcrumb.css">
        <link rel="stylesheet" href="assets/css/customtable.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css">
        <link rel="stylesheet" href="assets/css/sticky-dark-top-nav-with-dropdown-1.css">
        <link rel="stylesheet" href="assets/css/sticky-dark-top-nav-with-dropdown.css">
    </head>

    <body id="Page-Body">
        <div class="card-body" id="Table-Body" style="padding-bottom: 0px;padding-top: 10px;">
            <div class="row" id="Table-PODetails">
                <div class="col-auto col-md-6 col-xl-4 text-nowrap" id="Table-PODetailCol1" style="padding-top: 12px;padding-bottom: 12px;width: 370px;">
                    <div id="Table-PODetail1" class="dataTables_length" aria-controls="dataTable" style="padding-top: 10px;padding-bottom: 10px;width: 100%;max-width: 360px;"><label id="Table-PONumLabel" style="margin-top: 0px;margin-bottom: 0px;width: 100%;">Customer PO #:&nbsp;<input class="border rounded border-dark float-right" type="text" id="Table-PONumInput" style="border-radius: 20px;margin-left: 0px;width: 185px;" name="CustPONum"></label></div>
                    <div id="Table-PODetail2" class="dataTables_length" aria-controls="dataTable" style="padding-top: 10px;padding-bottom: 10px;width: 100%;max-width: 360px;"><label id="Table-NameLabel" style="margin-top: 0px;margin-bottom: 0px;width: 100%;">Customer Name:&nbsp;<input class="border rounded border-dark float-right" type="text" id="Table-NameInput" style="border-radius: 20px;margin-left: 0px;width: 185px;" name="CustName"></label></div>
                    <div id="Table-PODetail3" class="dataTables_length" aria-controls="dataTable" style="padding-top: 10px;padding-bottom: 10px;width: 100%;max-width: 360px;"><label id="Table-EmailLabel" style="margin-top: 0px;margin-bottom: 0px;width: 100%;">Customer Email:&nbsp;<input class="border rounded border-dark float-right" type="email" id="Table-EmailInput" style="width: 185px;border-radius: 20px;margin-left: 0px;" autocomplete="on" name="CustEmail"></label></div>
                </div>

                <div class="col-auto col-md-6 col-xl-4 text-nowrap" id="Table-PODetailCol2" style="padding-top: 12px;padding-bottom: 12px;">
                    <div id="Table-PODetail4" class="dataTables_length" aria-controls="dataTable" style="padding-top: 10px;padding-bottom: 10px;width: 100%;max-width: 360px;"><label id="Table-NumLabel" style="margin-top: 0px;margin-bottom: 0px;width: 100%;">Customer Number:&nbsp;<input class="border rounded border-dark float-right" type="tel" id="Table-NumInput" style="border-radius: 20px;width: 185px;" autocomplete="on" name="CustNum"></label></div>
                    <div id="Table-PODetail5" class="dataTables_length" aria-controls="dataTable" style="padding-top: 10px;padding-bottom: 10px;width: 100%;max-width: 360px;"><label id="Table-AddrLabel" style="margin-top: 0px;margin-bottom: 0px;width: 100%;">Customer Address:&nbsp;<input class="border rounded border-dark float-right" type="text" id="Table-AddrInput" style="border-radius: 20px;margin-left: 0px;width: 185px;" name="CustAddr"></label></div>
                    <div id="Table-PODetail6" class="dataTables_length" aria-controls="dataTable" style="padding-top: 10px;padding-bottom: 10px;width: 100%;max-width: 360px;"><label id="Table-MOPLabel" style="margin-top: 0px;margin-bottom: 0px;width: 100%;">Mode of Payment:&nbsp;<select class="border rounded border-dark float-right" id="Table-MOPInput" style="width: 185px;border-radius: 20px;height: 28px;" name="CustMOP"><optgroup label="Please Select MOP"><option value="Cash on Delivery">Cash on Delivery</option><option value="Credit/Debit Card">Credit/Debit Card</option><option value="Online Bank Payment">Online Bank Payment</option><option value="G-Cash">G-Cash</option><option value="Shopee Pay">Shopee Pay</option></optgroup></select></label></div>
                </div>

                <div class="col-auto col-md-6 col-xl-4 text-nowrap" id="Table-PODetailCol3" style="padding-top: 0px;padding-bottom: 12px;">
                    <div id="Table-PODetail7-8" class="dataTables_length" aria-controls="dataTable" style="padding-top: 0px;padding-bottom: 0px;width: 100%;max-width: 360px;">
                        <div class="row" id="Table-Detail7-8">
                            <div class="col" id="Table-PODetail7"><label class="col-form-label text-center" id="Table-DateOrdLabel" style="margin-top: 0px;margin-bottom: 0px;width: 100%;">Date Ordered:&nbsp;<input class="border rounded border-dark float-left" id="Table-DateOrdInput" type="date" style="width: 165px;margin-right: auto;margin-left: auto;border-radius: 20px;" name="CustDateOrd"></label></div>
                            <div class="col" id="Table-PODetail8"><label class="col-form-label text-center" id="Table-DatePickLabel" style="margin-top: 0px;margin-bottom: 0px;width: 100%;">Pickup Date:&nbsp;<input class="border rounded border-dark float-left" id="Table-DatePickInput" type="date" style="width: 165px;margin-right: auto;margin-left: auto;border-radius: 20px;" name="CustDatePick"></label></div>
                        </div>
                    </div>
                    <div id="Table-PODetail9" class="dataTables_length" aria-controls="dataTable" style="padding-top: 5px;padding-bottom: 10px;width: 100%;max-width: 360px;"><label id="Table-PlatformLabel" style="margin-top: 0px;margin-bottom: 0px;width: 100%;">Platform:&nbsp;<select class="border rounded border-dark float-right" id="Table-PlatformInput" style="width: 185px;border-radius: 20px;height: 28px;" name="CustPlatform"><optgroup label="Please Select Platform"><option value="Facebook Marketplace/Instagram ">Facebook Marketplace/Instagram </option><option value="Shopee">Shopee</option></optgroup></select></label></div>
                    <div id="Table-PODetail10" class="dataTables_length" aria-controls="dataTable" style="padding-top: 10px;padding-bottom: 10px;width: 100%;max-width: 360px;"><label id="Table-CourierLabel" style="margin-top: 0px;margin-bottom: 0px;width: 100%;">Courier:&nbsp;<select class="border rounded border-dark float-right" id="Table-CourierInput" style="width: 185px;border-radius: 20px;height: 28px;" name="CustCourier"><optgroup label="Please Select Courier"><option value="Grab">Grab</option><option value="Lalamove">Lalamove</option><option value="MrSpeedy">MrSpeedy</option><option value="Provided by Shopee">Provided by Shopee</option></optgroup></select></label></div>
                </div>
            </div>
        </div>
    </body>

</html>