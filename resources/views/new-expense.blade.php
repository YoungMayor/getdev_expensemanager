<!DOCTYPE html>
<html>

<head>
    <title>Create Expense Record</title>

    @include("links.metas")
    @include("links.styles")
</head>

<body>
    <nav class="navbar navbar-dark navbar-expand sticky-top bg-info shadow-lg">
        <div class="container-fluid"><a class="navbar-brand text-nowrap" href="index.html">Expenses-Record</a><button data-toggle="collapse" class="navbar-toggler" data-target="#navcol-1"><span class="sr-only">Toggle navigation</span><span class="navbar-toggler-icon"></span></button>
            <div
                class="collapse navbar-collapse d-md-flex justify-content-end" id="navcol-1">
                <ul class="nav navbar-nav">
                    <li class="nav-item" role="presentation"><a class="nav-link active text-monospace text-warning bg-light border rounded border-primary shadow confirm-follow" href="expenses.html" data-note="Are you sure you want to cancel the form. Your records will be lost?"><i class="fas fa-arrow-left"></i>&nbsp;Back to Expenses</a></li>
                </ul>
        </div>
        </div>
    </nav>
    <!-- Start: Page content -->
    <div class="container page-content">
        <div class="row">
            <div class="col">
                <h4 class="text-monospace text-center text-info">
                    Fill the Form Below to Create a New Expense
                </h4>

                <form id="expense-form"
                      action="save-expense"
                      method="post">
                      @csrf
                    <div class="form-group">
                        <label class="text-black-50" for="exp_date">
                            Expense Record Date
                        </label>
                        <input class="form-control"
                               type="date"
                               name="exp_date"
                               required="">
                   </div>
                    <div class="form-group align-items-center" style="margin: 0;"><label class="text-black-50" style="margin: 0;">Expense Amount:&nbsp;</label><input class="form-control" type="text" id="exp_amt" name="exp_amt" placeholder="Enter Expense Amount Here" required="" autocomplete="off" pattern="^([0-9]{1,3},([0-9]{3},)*[0-9]{3}|[0-9]+)(\.[0-9][0-9])?\s*((E|e)(U|u)(R|r))?$"></div>
                    <div
                        class="form-group align-items-center"><label class="text-black-50" for="exp_amtV">+20% VAT:</label><input class="form-control" type="text" id="exp_amtV" name="exp_amtV" placeholder="Total Expense + Vat" readonly="" required=""><input class="d-none" type="checkbox" id="exp_amt_inEUR"
                            name="exp_amt_inEUR" value="yes"><input class="form-control" type="hidden" id="exp_amtV_int" name="exp_amtV_int"></div>
            <div class="form-group"><label id="exp_reason" for="exp_reason">Expense Description</label><textarea class="form-control form-control-lg" id="exp_reason" name="exp_reason" placeholder="The reason for the expense" rows="5" required=""></textarea></div>
            <div class="form-group d-flex justify-content-end"><button class="btn btn-info btn-lg border rounded shadow-sm" type="submit">&nbsp;<i class="fas fa-save"></i>&nbsp;Save Expense<br></button></div>
            </form>
        </div>
    </div>
    </div>
    <!-- End: Page content -->
    @include("sections.footer")


</body>
    @include("links.scripts")
    <script src="assets/js/expense-form.js"></script>
    <script src="assets/js/section-loader.js"></script>
</html>
