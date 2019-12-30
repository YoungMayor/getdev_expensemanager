<!DOCTYPE html>
<html>

<head>
    <title>getdev_expenses</title>

    @include("links.metas")
    @include("links.styles")
    <link rel="stylesheet" href="assets/css/Highlight-Clean.css">
</head>

<body>
    <nav class="navbar navbar-dark navbar-expand sticky-top bg-info shadow-lg">
        <div class="container-fluid"><a class="navbar-brand text-nowrap" href="/">Expenses-Keeper</a></div>
    </nav>
    <!-- Start: Highlight Clean -->
    <div class="highlight-clean">
        <div class="container">
            <!-- Start: Intro -->
            <div class="intro">
                <h2 class="text-center">Welcome To Expense-Keeper</h2>
                <p class="text-center">Easily log your expenses in and preview them in a tabulated format&nbsp;</p>
            </div>
            <!-- End: Intro -->
            <!-- Start: Buttons -->
            <div class="buttons"><a class="btn btn-primary border rounded shadow-sm" role="button" href="expenses">View Expenses</a><a class="btn btn-info bg-info border rounded shadow-sm" role="button" href="new-expense">Create Expense</a></div>
            <!-- End: Buttons -->
        </div>
    </div>
    <!-- End: Highlight Clean -->
    @include("sections.footer")


</body>
    @include("links.scripts")
</html>
