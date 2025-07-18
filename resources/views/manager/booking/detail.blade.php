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
        <th>Item Name</th>
        <td>{{$booking->item_name}}</td>
      </tr>
      <tr>
        <th>Category Name</th>
        <td>{{ $booking->categoryRelation->title ?? 'N/A' }}</td>
      </tr>
      <tr>
        <th>City Name</th>
        <td>{{$booking->city}}</td>
      </tr>
      <tr>
        <th>Area</th>
        <td>{{$booking->area}}</td>
      </tr>
      <tr>
        <th>Pin Code</th>
        <td>{{$booking->pincode}}</td>
      </tr>
      <tr>
        <th>Qty</th>
        <td>{{$booking->qty}}</td>
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
      <tr>
        <th>The said goods were received safely.</th>
        <th>yes</th>
      </tr>
      <tr>
        <th>Rent recovered</th>
        <th>yes</th>
      </tr>
    </tbody>
  </table>