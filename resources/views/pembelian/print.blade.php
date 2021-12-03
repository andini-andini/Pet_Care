<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <title>Struk Pembelian Barang</title>

    <style>
        .invoice-box {
            max-width: 800px;
            margin: auto;
            padding: 30px;
            border: 1px solid #eee;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.15);
            font-size: 16px;
            line-height: 24px;
            font-family: 'Helvetica Neue', 'Helvetica', Helvetica, Arial, sans-serif;
            color: #555;
        }

        .invoice-box table {
            width: 100%;
            line-height: inherit;
            text-align: left;
        }

        .invoice-box table td {
            padding: 5px;
            vertical-align: top;
        }

        .invoice-box table tr td:nth-child(2) {
            text-align: right;
        }

        .invoice-box table tr.top table td {
            padding-bottom: 5px;
        }

        .invoice-box table tr.top table td.title {
            font-size: 45px;
            line-height: 45px;
            color: #333;
        }

        .invoice-box table tr.information table td {
            padding-bottom: 40px;
        }

        .invoice-box table tr.heading td {
            background: #eee;
            border-bottom: 1px solid #ddd;
            font-weight: bold;
        }

        .invoice-box table tr.details td {
            padding-bottom: 20px;
        }

        .invoice-box table tr.item td {
            border-bottom: 1px solid #eee;
        }

        .invoice-box table tr.item.last td {
            border-bottom: none;
        }

        .invoice-box table tr.total td:nth-child(2) {
            border-top: 2px solid #eee;
            font-weight: bold;
        }

        @media only screen and (max-width: 600px) {
            .invoice-box table tr.top table td {
                width: 100%;
                display: block;
                text-align: center;
            }

            .invoice-box table tr.information table td {
                width: 100%;
                display: block;
                text-align: center;
            }
        }

        /** RTL **/
        .invoice-box.rtl {
            direction: rtl;
            font-family: Tahoma, 'Helvetica Neue', 'Helvetica', Helvetica, Arial, sans-serif;
        }

        .invoice-box.rtl table {
            text-align: right;
        }

        .invoice-box.rtl table tr td:nth-child(2) {
            text-align: left;
        }

    </style>
</head>

<body>
    <div class="invoice-box">
        <table cellpadding="0" cellspacing="0">
            <tr class="top">
                <td colspan="4">
                    <table>
                        <tr>
                            <br><br>
                            <td class="title">
                                <h4>PET<span style="color: #3f97da">CARE+</span></h4>
                            </td>
                            <td>
                                Invoice : #{{ $pembelian->code }}<br />
                                Date : {{ date('Y-m-d H:i:s') }}<br />
                            </td>
                        </tr>
                    </table>
                </td>
            </tr>
            <tr class="information">
                <td colspan="4">
                    <table>
                        <tr>
                            <td>
                                {{ $pembelian->carts->first()->user->name }}<br />
                                {{ $pembelian->carts->first()->user->address }}<br />
                                {{ $pembelian->carts->first()->user->phone }}
                            </td>
                            <td>
                                Customer Service<br />
                                Amelia Widya Andini<br />
                                cs.pet_care@gmail.com
                            </td>
                        </tr>
                    </table>
                </td>
            </tr>


            <tr class="heading">
                <td>Item</td>
                <td style="text-align: left">QTY</td>
                <td>Price</td>
                <td>Total</td>
            </tr>
            @foreach ($pembelian->carts as $item)

                <tr class="item">
                    <td>{{ $item->barang->name }}</td>
                    <td style="text-align: left"> {{ $item->qty }}</td>
                    <td>Rp {{ number_format($item->barang->price, 0, ',', '.') }}</td>
                    <td>Rp {{ number_format($item->total, 0, ',', '.') }}</td>
                </tr>
            @endforeach
            <tr class="heading">
                <td colspan=3> Total </td>
                <td style="text-align: left">Rp {{ number_format($pembelian->total, 0, ',', '.') }}</td>
            </tr>

        </table>

    </div>
</body>

</html>