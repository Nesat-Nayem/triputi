<table class="table table-bordered table-responsive-sm">
    <tbody>
      <tr>
        <th>Report Number*</th>
        <td>{{ $reports->report_nub }}</td>
      </tr>

      <tr>
        <th>Qty*</th>
        <td>{{ $reports->qty }}</td>
      </tr>

      <tr>
        <th>Owner Name*</th>
        <td>{{ $reports->owner_name }}</td>
      </tr>

      <tr>
        <th>Driver Name*</th>
        <td>{{ $reports->driver_name }}</td>
      </tr>

      <tr>
        <th>Will Take*</th>
        <td>{{ $reports->will_take }}</td>
      </tr>

      <tr>
        <th>Item Info*</th>
        <td>{{ $reports->item_info }}</td>
      </tr>

      <tr>
        <th>Particular Name*</th>
        <td>{{ $reports->particular_name }}</td>
      </tr>
      <tr>
        <th>Date*</th>
        <td>{{ $reports->date }}</td>
      </tr>

      <tr>
        <th>Village*</th>
        <td>{{ $reports->village }}</td>
      </tr>

      <tr>
        <th>Vehicle Number*</th>
        <td>{{ $reports->vihicle_number }}</td>
      </tr>

      <tr>
        <th>Transport Fare*</th>
        <td>{{ $reports->transport_fare }}</td>
      </tr>

      <tr>
        <th>Filling Charge*</th>
        <td>{{ $reports->filling_charge }}</td>
      </tr>

      <tr>
        <th>Receipt Charge*</th>
        <td>{{ $reports->receipt_charge }}</td>
      </tr>

      <tr>
        <th>Commission A*</th>
        <td>{{ $reports->commission_a }}</td>
      </tr>

      <tr>
        <th>Market Hamali Charge B*</th>
        <td>{{ $reports->market_hamali_charge_b }}</td>
      </tr>

      <tr>
        <th>Commission Taken C*</th>
        <td>{{ $reports->commission_taken_c }}</td>
      </tr>

      <tr>
        <th>Advance Commission*</th>
        <td>{{ $reports->advance_commission }}</td>
      </tr>

      <tr>
        <th>Remaining Commission*</th>
        <td>{{ $reports->remaring_commission }}</td>
      </tr>

      <tr>
        <th>Total*</th>
        <td>{{ $reports->total }}</td>

       
      </tr>

      <tr>
        <th>Status*</th>
        <td>
          @if($reports->status == 'Y')
            <div class="badge rounded-pill bg-success text-white">
              Active
            </div>
          @else
            <div class="badge rounded-pill bg-danger text-white">
              Inactive
            </div>
          @endif
        </td>
      </tr>
    </tbody>
</table>
