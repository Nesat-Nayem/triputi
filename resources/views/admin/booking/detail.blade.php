<table class="table table-bordered table-responsive-sm">
    <tbody>
      <tr>
        <th>will send</th>
        <td>{{$booking->will_sand}}</td>
      </tr>
      <tr>
        <th>will take</th>
        <td>{{$booking->will_take}}</td>
      </tr>
      <tr>
        <th>Date</th>
        <td>{{$booking->date}}</td>
      </tr>
      <tr>
        <th>Phone</th>
        <td>{{$booking->phone}}</td>
      </tr>
      <tr>
        <th>Item Name</th>
        <td>
          @php
              $items = json_decode($booking->item_name, true);
              if (is_array($items)) {
                  foreach ($items as $item) {
                      echo isset($item['item_name']) ? $item['item_name'] . ',<br>' : '';
                  }
              } else {
                  echo 'N/A';
              }
          @endphp
      </td>
      
      </tr>
     
      <tr>
        <th>Qty</th>
        <td>
          @php
              $items = json_decode($booking->item_name, true);
              if (is_array($items)) {
                  $qtyList = array_column($items, 'qty'); // Extract all qty values
                  echo implode(',<br>', $qtyList); // Join them with comma and line break
              } else {
                  echo 'N/A';
              }
          @endphp
      </td>
      
      
      </tr>

      <tr>
        <th>Per Piece Rate</th>
        <td>
          @php
              $items = json_decode($booking->item_name, true);
              if (is_array($items)) {
                  $rates = array_column($items, 'per_piece_rate'); // Extract per_piece_rate values
                  echo implode(',<br>', $rates); // Join them with comma and new line
              } else {
                  echo 'N/A';
              }
          @endphp
      </td>
      
      
      </tr>


      <tr>
        <th>Transportation fare</th>
        <td>{{$booking->transportation_fare}}</td>
      </tr>
      <tr>
        <th>Filled up</th>
        <td>{{$booking->filled_up}}</td>
      </tr>
      <tr>
        <th>Receipt charge</th>
        <td>{{$booking->receipt_charge}}</td>
      </tr>
      <tr>
        <th>we attacked</th>
        <td>{{$booking->we_attacked}}</td>
      </tr>
      <tr>
        <th>Total</th>
        <td>{{$booking->total}}</td>
      </tr>
      <tr>
        <th>Status</th>
        <td>
          @if($booking->status == 'Y')
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
      {{-- <tr>
        <th>The said goods were received safely.</th>
        <th>yes</th>
      </tr> --}}
      
    </tbody>
  </table>