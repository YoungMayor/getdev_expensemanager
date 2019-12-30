<!DOCTYPE html>
<html>

<head>
    <title>My Expenses</title>

    @include("links.metas")
    @include("links.styles")
</head>

<body>
    <nav class="navbar navbar-dark navbar-expand sticky-top bg-info shadow-lg">
        <div class="container-fluid"><a class="navbar-brand text-nowrap" href="/">Expenses-Record</a><button data-toggle="collapse" class="navbar-toggler" data-target="#navcol-1"><span class="sr-only">Toggle navigation</span><span class="navbar-toggler-icon"></span></button>
            <div
                class="collapse navbar-collapse d-md-flex justify-content-end" id="navcol-1">
                <ul class="nav navbar-nav">
                    <li class="nav-item" role="presentation"><a class="nav-link active text-monospace text-info bg-light border rounded border-primary shadow" href="new-expense"><i class="fas fa-plus"></i>&nbsp;New Expense</a></li>
                </ul>
        </div>
        </div>
    </nav>

    <!-- Start: Page content -->
    <div class="container page-content">
        <div class="row">
            <div class="col">
                <!-- Start: Expenses Table -->
                <div class="table-responsive table-bordered mb-3">
                    <table class="table table-striped table-bordered table-hover">
                        <thead>
                            <tr class="table-warning border rounded-circle shadow-lg m-auto">
                                <th>ID</th>
                                <th class="text-center">Date</th>
                                <th class="text-center">Description</th>
                                <th class="text-center">Amount (+20% VAT)<br>(£)</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($expenses as $expense)
                                <tr>
                                    <td>{{ $expense->expense_id }}</td>
                                    <td>{{ $expense->expense_date }}</td>
                                    <td class="break-word">{{ $expense->expense_reason }}&nbsp;</td>
                                    <td class="text-right">{{ number_format($expense->expense_cost, 2) }}</td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
                <!-- End: Expenses Table -->
            </div>
        </div>
        <div class="row">
            <div class="col">
                {{ $expenses->links("pagination.fullpagination") }}
            </div>
        </div>
    </div>
    <!-- End: Page content -->
    @include("sections.footer")


</body>
    @include("links.scripts")
</html>

