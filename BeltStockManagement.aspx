<%@ Page Language="C#" AutoEventWireup="true" CodeBehind="StockManagement.aspx.cs" Inherits="StockManagement.StockManagement" %>

<!DOCTYPE html>

<html xmlns="http://www.w3.org/1999/xhtml">
<head runat="server">
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Stock Management</title>
    <style>
        body {
            background-color: skyblue;
            text-align: center;
            font-family: Arial, sans-serif;
        }

        #container {
            margin-top: 50px;
        }

        #logo {
            width: 100px;
            height: 100px;
            margin-bottom: 20px;
        }

        input[type="number"] {
            width: 50px;
            margin-bottom: 10px;
        }

        table {
            margin: 20px auto;
            border-collapse: collapse;
            width: 60%;
        }

        th, td {
            border: 1px solid black;
            padding: 8px;
        }

        th {
            background-color: #f44336;
            color: white;
        }

        button {
            background-color: #f44336;
            color: white;
            padding: 10px 20px;
            border: none;
            cursor: pointer;
            margin-top: 20px;
        }
    </style>
</head>
<body>
    <form id="form1" runat="server">
        <div id="container">
            <asp:Image ID="logo" runat="server" ImageUrl="~/Images/logo.png" AlternateText="Logo" />
            <h2>Stock Management - Belts</h2>
            <p>Total Quantity: <asp:TextBox ID="totalQuantity" runat="server" Text="0" type="number"></asp:TextBox></p>
            <p>Input Quantity: <asp:TextBox ID="inputQuantity" runat="server" Text="0" type="number"></asp:TextBox></p>
            <p>Remaining Quantity: <span id="remainingQuantity" runat="server">0</span></p>
            <asp:Button ID="updateStockButton" runat="server" Text="Update Stock" OnClick="updateStock" />
            <h3>Size Categories:</h3>
            <table>
                <thead>
                    <tr>
                        <th>Size</th>
                        <th>Quantity</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>75</td>
                        <td><span id="size75" runat="server">0</span></td>
                    </tr>
                    <tr>
                        <td>95</td>
                        <td><span id="size95" runat="server">0</span></td>
                    </tr>
                    <tr>
                        <td>110</td>
                        <td><span id="size110" runat="server">0</span></td>
                    </tr>
                </tbody>
            </table>
            <asp:Button ID="printButton" runat="server" Text="Print" OnClientClick="printPage();return false;" />
        </div>
    </form>
    <script>
        function printPage() {
            window.print();
        }
    </script>
</body>
</html>
