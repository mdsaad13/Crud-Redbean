<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans&display=swap" rel="stylesheet">
    <title>Documentation</title>
</head>
<style>
    body {
        padding: 25px 80px;
        font-family: 'Open Sans', sans-serif;
        /* background: #F7F7F7; */
        background: #f1f1f1;
    }

    table {
        width: -webkit-fill-available;
        /* background: white; */
        padding: 10px;
        text-align: left;
    }

    table .heading {
        width: 20%;
    }

    .note {
        color: #595959;
        font-size: 13px;
        font-weight: bold;
        padding: 0 4px;
    }

    .code {
        background: white;
        padding: 10px;
        width: fit-content;
        border-radius: 6px;
        font-weight: 600;
    }

    .code .example {
        font-weight: normal;
    }

    .heading {
        font-size: 1.5rem;
        font-weight: bold;
    }

    .content {
        line-height: 2;
    }

    .divider {
        border-bottom: 1.5px solid #bcbcbc;
        margin-top: 1rem;
        margin-bottom: 1rem;
    }

    .orange {
        color: #bf360c;
    }

    .purple {
        color: #673ab7;
    }

    .lightblue {
        color: #03a9f4;
    }

    .darkblue {
        color: #0d47a1;
    }

    .teal {
        color: #009688;
    }
</style>

<body>
    <h1>How to implement the code in your project!</h1>
    <h3>First step <span style="color:red">(Important)</span> :</h3>
    <div class="content">
        <div>At the begining of your file, include the class.php file</div>
        <div class="code">
            <span class="example">Example :</span>
            <div>
                <span class="purple">require</span> <span class="orange">'controllers/class.php'</span>;
            </div>
        </div>
        <div class="note">
            Note: This class includes all the other sub classes in the folder controllers. You dont have to manually include all the other files
        </div>
        <br>
        <div>To use any of the functions from class of class.php file, you need to create object of the class first</div>
        <div class="code">
            <span class="example">Example :</span>
            <div>
                <span class="lightblue">$obj </span>=<span class="darkblue"> new </span><span class="teal"> Operations </span>;
            </div>
        </div>
        <div class="note">
            Note: This class name of main class is "Operations"
        </div>
    </div>
    <div class="divider"></div>
    <h1>Function of the class "Operations"</h1>
    <!-- Insert OP -->
    <table>
        <tr>
            <td class="heading">insert</td>
            <td class="content">
                <span>This operation is used to insert data into database</span>
                <div class="code">
                    <span class="example">Example :</span>
                    <div>
                        <span class="purple">require</span> <span class="orange">'controllers/class.php'</span>;
                    </div>
                </div>
            </td>
        </tr>
    </table>
    <div class="divider"></div>
    <!-- update OP -->
    <table>
        <tr>
            <td class="heading">update</td>
            <td class="content">
                <span>this operation is used to insert data into database</span>
                <div class="code">
                    <span class="example">Example :</span>
                    <div>
                        <span class="purple">require</span> <span class="orange">'controllers/class.php'</span>;
                    </div>
                </div>
            </td>
        </tr>
    </table>
    <div class="divider"></div>
    <!-- update OP -->
    <table>
        <tr>
            <td class="heading">delete</td>
            <td class="content">
                <span>this operation is used to insert data into database</span>
                <div class="code">
                    <span class="example">Example :</span>
                    <div>
                        <span class="purple">require</span> <span class="orange">'controllers/class.php'</span>;
                    </div>
                </div>
            </td>
        </tr>
    </table>
    <div class="divider"></div>
    <!-- update OP -->
    <table>
        <tr>
            <td class="heading">SelectByID</td>
            <td class="content">
                <span>this operation is used to insert data into database</span>
                <div class="code">
                    <span class="example">Example :</span>
                    <div>
                        <span class="purple">require</span> <span class="orange">'controllers/class.php'</span>;
                    </div>
                </div>
            </td>
        </tr>
    </table>
    <div class="divider"></div>
    <!-- update OP -->
    <table>
        <tr>
            <td class="heading">SelectAll</td>
            <td class="content">
                <span>this operation is used to insert data into database</span>
                <div class="code">
                    <span class="example">Example :</span>
                    <div>
                        <span class="purple">require</span> <span class="orange">'controllers/class.php'</span>;
                    </div>
                </div>
            </td>
        </tr>
    </table>
    <div class="divider"></div>
    <!-- update OP -->
    <table>
        <tr>
            <td class="heading">SelectByArgs</td>
            <td class="content">
                <span>this operation is used to insert data into database</span>
                <div class="code">
                    <span class="example">Example :</span>
                    <div>
                        <span class="purple">require</span> <span class="orange">'controllers/class.php'</span>;
                    </div>
                </div>
            </td>
        </tr>
    </table>
    <div class="divider"></div>
    <!-- update OP -->
    <table>
        <tr>
            <td class="heading">Validate</td>
            <td class="content">
                <span>this operation is used to insert data into database</span>
                <div class="code">
                    <span class="example">Example :</span>
                    <div>
                        <span class="purple">require</span> <span class="orange">'controllers/class.php'</span>;
                    </div>
                </div>
            </td>
        </tr>
    </table>
</body>

</html>