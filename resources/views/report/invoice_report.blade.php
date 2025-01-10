<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>{{ $title }}</title>
  <style>
    @font-face {
      font-family: "NotoSansJP";
      src: url("{{ storage_path('fonts/NotoSansJP-Regular.ttf') }}") format("truetype"),
      url("{{ storage_path('fonts/NotoSansJP-Bold.ttf') }}") format("truetype");
      font-weight: 400;
      font-style: normal;
    }

    body {
      font-family: "NotoSansJP",sans-serif;
      margin: 0;
      padding: 0;
    }

    .main-container {
      width: 100%;
      height: 100%;
      background: #fff;
    }

    .invoice-header {
      display: flex;
      justify-content: space-between;
      align-items: center;
      border-bottom: 1px solid #ddd;
      padding-bottom: 10px;
      margin-bottom: 20px;
    }

    .invoice-header .left,
    .invoice-header .right {
      font-size: 14px;
    }

    .invoice-title {
      text-align: center;
      font-size: 24px;
      margin-bottom: 20px;
    }

    .invoice-content {
      font-size: 14px;
    }

    .invoice-content .section {
      margin-bottom: 20px;
    }

    .contact-info,
    .bank-info {
      display: flex;
      justify-content: space-between;
    }

    .contact-info div,
    .bank-info div {
      flex: 1;
    }

    .contact-info div:not(:last-child),
    .bank-info div:not(:last-child) {
      margin-right: 20px;
    }

    .bank-section {
      display: flex;
      justify-content: space-between;
      align-items: center;
    }

    .data-table {
      width: 100%;
      border-collapse: collapse;
      margin-top: 20px;
    }

    .data-table th,
    .data-table td {
      border: 1px solid #ddd;
      text-align: center;
      padding: 8px;
      
    }

    .data-table th {
      background-color: #f4f4f4;
      font-weight: normal !important;
    }

    .invoice-data {
      margin-top: 20px;
    }

    .invoice-table {
      width: 100%;
      border: 1px solid black;
      border-collapse: collapse;
    }

    .invoice-table th,
    .invoice-table td {
      border-right: 1px solid #000;
      border-left: 1px solid #000;
      padding: 8px;
      text-align: left;
      font-weight: normal !important;
    }

    .invoice-table th:first-child,
    .invoice-table td:first-child {
      border-left: 0;
    }

    .invoice-table th:last-child,
    .invoice-table td:last-child {
      border-right: 0;
    }

    .invoice-table th {
      background-color: #f2f2f2;
    }
  </style>
</head>

<body>
  <div class="main-container">
    <div class="invoice-container">
      <div class="invoice-title">{{ __('messages.invoice') }}</div>

      <div class="invoice-header">
        <div class="left">
          <p>{{ __('messages.customer_code') }}: <strong>A-8</strong></p>
          <p>{{ __('messages.date') }}: <strong>July 31, 2023</strong></p>
        </div>
      </div>

      <div class="invoice-content">
        <div class="section">
          <p>
            {{ __('messages.about_company') }}
          </p>
          <p>{{ __('messages.address') }}</p>
        </div>

        <div class="bank-section">
          <div class="bank-info">
            <p>{{ __('messages.bank_info') }}:</p>
            <div>
              <p>{{ __('messages.transfer_to') }}: Resona Bank Minamimorimachi</p>
              <p>{{ __('messages.account_no') }}: Ordinary 45976</p>
              <p>{{ __('messages.name') }}: MBN Shokuji</p>
              <p>{{ __('messages.registration_no') }}: T1234567890123</p>
            </div>
          </div>
        </div>

        <div class="section">
          <p>
            {{ __('messages.thank') }}
          </p>
        </div>
      </div>
    </div>

    <div class="data-table-container">
      <table class="data-table">
        <thead>
          <tr>
            <th>{{ __('messages.last_billed_amount') }}</th>
            <th>{{ __('messages.deposit_amount') }}</th>
            <th>{{ __('messages.carry_over_amount') }}</th>
            <th>{{ __('messages.purchase_amount') }}</th>
            <th>{{ __('messages.consumption_amount') }}</th>
            <th>{{ __('messages.purchase_total') }}</th>
            <th>{{ __('messages.current_billable_amount') }}</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td>4,536</td>
            <td>0</td>
            <td>4,536</td>
            <td>7,440</td>
            <td>643</td>
            <td>8,083</td>
            <td>12,619</td>
          </tr>
        </tbody>
      </table>
    </div>

    <div class="invoice-data">
      <table class="invoice-table">
        <tr>
          <th>{{ __('messages.document_date') }}</th>
          <th>{{ __('messages.slip_no') }}</th>
          <th>{{ __('messages.product_number') }}</th>
          <th>{{ __('messages.product_name') }}</th>
          <th>{{ __('messages.quantity') }}</th>
          <th>{{ __('messages.single_price') }}</th>
          <th>{{ __('messages.purchase_amount') }}</th>
        </tr>
        @for($i = 0; $i < 20; $i++)
          <tr>
          <td>23/07/21</td>
          <td>00000439</td>
          <td>Y-10</td>
          <td></td>
          <td>2 books</td>
          <td>1,200</td>
          <td>2,400</td>
          </tr>
          @endfor
          <tr>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td>{{ __('messages.sales_total') }}:</td>
            <td>22,380</td>
          </tr>
          <tr>
            <td></td>
            <td></td>
            <td></td>
            <td>{{ __('messages.internal_tax') }}:</td>
            <td>5,443</td>
            <td>{{ __('messages.total') }}:</td>
            <td>403</td>
          </tr>
          <tr>
            <td></td>
            <td></td>
            <td></td>
            <td>8% {{ __('messages.target_tax') }}:</td>
            <td>22,380</td>
            <td>{{ __('messages.internal_tax') }}:</td>
            <td>240</td>
          </tr>
          <tr>
            <td></td>
            <td></td>
            <td></td>
            <td>10% {{ __('messages.target_tax') }}:</td>
            <td>22,380</td>
            <td>{{ __('messages.internal_tax') }}:</td>
            <td>240</td>
          </tr>
      </table>
    </div>
  </div>
</body>

</html>