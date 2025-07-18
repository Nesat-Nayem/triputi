<div class="row">
    <div class="col-lg-12">
      <div class="bsc-tbl-bdr">
        <table class="table table-bordered">
          <tbody>
            <tr>
              <td colspan="2" style="text-wrap: nowrap">
                Bill Number
              </td>
              <td colspan="2" style="text-wrap: nowrap">{{ $row->bill_number }}</td>
              <td colspan="2" style="text-wrap: nowrap">
                Name
              </td>
              <td colspan="2" style="text-wrap: nowrap">{{ $row->name }}</td>



            </tr>

            <tr>
              <td colspan="2" style="text-wrap: nowrap">
                Order Date
              </td>
              <td colspan="2" style="text-wrap: nowrap">
                {{ date("d/m/Y", strtotime($row->order_date)) }}
              </td>
              <td colspan="2" style="text-wrap: nowrap">
                Delivery Date
              </td>
              <td colspan="2" style="text-wrap: nowrap">
                {{ date("d/m/Y", strtotime($row->delivery_date)) }}
              </td>
            </tr>

            <tr>

              <td colspan="2" style="text-wrap: nowrap">
                Mobile Number
              </td>
              <td colspan="2" style="text-wrap: nowrap">
              {{ $row->mobile }}
              </td>
              <td colspan="2" style="text-wrap: nowrap">
                Salesman Code
              </td>
              <td colspan="2" style="text-wrap: nowrap">{{ $row->salesman_code }}</td>
            </tr>

            <tr>

              <td colspan="2" style="text-wrap: nowrap">
                GST Number
              </td>
              <td colspan="2" style="text-wrap: nowrap">
               {{$row->gst}}
              </td>
              <td colspan="2" style="text-wrap: nowrap">Fabrics</td>
              <td colspan="2" style="text-wrap: nowrap">{{ $row->fabrics }}</td>
            </tr>
          </tbody>
        </table>
      </div>
    </div>

    <div class="col-lg-12">
      <div class="bsc-tbl-bdr">
        <table class="table table-bordered">
          <tbody>
            <tr>

              <td colspan="2" style="text-wrap: nowrap">Quantity</td>
              <td colspan="2" style="text-wrap: nowrap">{{ $row->quantity }}</td>
            </tr>

            <tr>
              <td colspan="2" style="text-wrap: nowrap">Amount</td>
              <td colspan="2" style="text-wrap: nowrap">Rs.{{ $row->amount }}</td>
              <td colspan="2" style="text-wrap: nowrap">
                Total Qty.
              </td>
              <td colspan="2" style="text-wrap: nowrap">{{ $row->total_quantity }}</td>
            </tr>

            <tr>
              <td colspan="2" style="text-wrap: nowrap">
                Total Amount
              </td>
              <td colspan="2" style="text-wrap: nowrap">{{ $row->total_amount }}</td>
              <td colspan="2" style="text-wrap: nowrap">Advance</td>
              <td colspan="2" style="text-wrap: nowrap">Rs.{{ $row->advance }}</td>
            </tr>

            <tr>
              <td colspan="2" style="text-wrap: nowrap">
                Advance Date
              </td>
              <td colspan="2" style="text-wrap: nowrap">
                {{ $row->advance_date }}
              </td>
              <td colspan="2" style="text-wrap: nowrap">Balance</td>
              <td colspan="2" style="text-wrap: nowrap">{{ $row->balance }}</td>
            </tr>
            <tr>
              <td colspan="2" style="text-wrap: nowrap">Receive</td>
              <td colspan="2" style="text-wrap: nowrap">Rs.{{ $row->receive }}</td>
              <td colspan="2" style="text-wrap: nowrap">
                Receive Date
              </td>
              <td colspan="2" style="text-wrap: nowrap">
                {{ $row->receive_date }}
              </td>
            </tr>
          </tbody>
        </table>
      </div>
    </div>

    <div class="col-lg-8">


        @php
            $topdata = json_decode($row->top_data);
        @endphp

        @foreach($topdata as $key => $value)

        <div class="bsc-tbl-bdr">
        <table class="table table-bordered">
          <tbody>
            <tr>
              <td colspan="2" style="text-wrap: nowrap">
                Selected Category
              </td>
              <td colspan="2" style="color: red; text-wrap: nowrap">
                <?php if(isset($value->type)) { echo $value->type;} ?>
              </td>
            </tr>
          </tbody>
        </table>
      </div>

      <div class="bsc-tbl-bdr">
        <table class="table table-bordered">
          <thead>
            <tr>
              <th style="text-wrap: nowrap">Particulars</th>
              <th style="text-wrap: nowrap">Body Size</th>
              <th style="text-wrap: nowrap">Losing</th>
              <th style="text-wrap: nowrap">Remark</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td style="text-wrap: nowrap">Length</td>
              <td style="text-wrap: nowrap"><?= isset($value->length->body_size) ? $value->length->body_size : "" ?></td>
              <td style="text-wrap: nowrap"><?= isset($value->length->losing) ? $value->length->losing : "" ?></td>
              <td style="text-wrap: nowrap"><?= isset($value->length->remark) ? $value->length->remark : "" ?></td>
            </tr>

            <tr>
              <td style="text-wrap: nowrap">Shoulder</td>
              <td style="text-wrap: nowrap"><?= isset($value->shoulder->body_size) ? $value->shoulder->body_size : "" ?></td>
              <td style="text-wrap: nowrap"><?= isset($value->shoulder->losing) ? $value->shoulder->losing : "" ?></td>
              <td style="text-wrap: nowrap"><?= isset($value->shoulder->remark) ? $value->shoulder->remark : "" ?></td>
            </tr>

            <tr>
              <td style="text-wrap: nowrap">Chest</td>
              <td style="text-wrap: nowrap"><?= isset($value->chest->body_size) ? $value->chest->body_size : "" ?></td>
              <td style="text-wrap: nowrap"><?= isset($value->chest->losing) ? $value->chest->losing : "" ?></td>
              <td style="text-wrap: nowrap"><?= isset($value->chest->remark) ? $value->chest->remark : "" ?></td>
            </tr>

            <tr>
              <td style="text-wrap: nowrap">Belly</td>

              <td style="text-wrap: nowrap"><?= isset($value->belly->body_size) ? $value->belly->body_size : "" ?></td>
              <td style="text-wrap: nowrap"><?= isset($value->belly->losing) ? $value->belly->losing : "" ?></td>
              <td style="text-wrap: nowrap"><?= isset($value->belly->remark) ? $value->belly->remark : "" ?></td>
            </tr>

            <tr>
              <td style="text-wrap: nowrap">Hip</td>

              <td style="text-wrap: nowrap"><?= isset($value->hip->body_size) ? $value->hip->body_size : "" ?></td>
              <td style="text-wrap: nowrap"><?= isset($value->hip->losing) ? $value->hip->losing : "" ?></td>
              <td style="text-wrap: nowrap"><?= isset($value->hip->remark) ? $value->hip->remark : "" ?></td>
            </tr>

            <tr>
              <td style="text-wrap: nowrap">Sleeve Length</td>

              <td style="text-wrap: nowrap"><?= isset($value->sleeve_length->body_size) ? $value->sleeve_length->body_size : "" ?></td>
              <td style="text-wrap: nowrap"><?= isset($value->sleeve_length->losing) ? $value->sleeve_length->losing : "" ?></td>
              <td style="text-wrap: nowrap"><?= isset($value->sleeve_length->remark) ? $value->sleeve_length->remark : "" ?></td>
            </tr>

            <tr>
              <td style="text-wrap: nowrap">Arms</td>

              <td style="text-wrap: nowrap"><?= isset($value->arms->body_size) ? $value->arms->body_size : "" ?></td>
              <td style="text-wrap: nowrap"><?= isset($value->arms->losing) ? $value->arms->losing : "" ?></td>
              <td style="text-wrap: nowrap"><?= isset($value->arms->remark) ? $value->arms->remark : "" ?></td>
            </tr>

            <tr>
              <td style="text-wrap: nowrap">Collar</td>

              <td style="text-wrap: nowrap"><?= isset($value->collor->body_size) ? $value->collor->body_size : "" ?></td>
              <td style="text-wrap: nowrap"><?= isset($value->collor->losing) ? $value->collor->losing : "" ?></td>
              <td style="text-wrap: nowrap"><?= isset($value->collor->remark) ? $value->collor->remark : "" ?></td>
            </tr>

            <tr>
              <td style="text-wrap: nowrap">Cuff</td>
              <td style="text-wrap: nowrap"><?= isset($value->cuff->body_size) ? $value->cuff->body_size : "" ?></td>
              <td style="text-wrap: nowrap"><?= isset($value->cuff->losing) ? $value->cuff->losing : "" ?></td>
              <td style="text-wrap: nowrap"><?= isset($value->cuff->remark) ? $value->cuff->remark : "" ?></td>
            </tr>

            <tr>
              <td style="text-wrap: nowrap">3/4</td>

              <td style="text-wrap: nowrap"><?= isset($value->three_foure->body_size) ? $value->three_foure->body_size : "" ?></td>
              <td style="text-wrap: nowrap"><?= isset($value->three_foure->losing) ? $value->three_foure->losing : "" ?></td>
              <td style="text-wrap: nowrap"><?= isset($value->three_foure->remark) ? $value->three_foure->remark : "" ?></td>
            </tr>

            <tr>
              <td style="text-wrap: nowrap">Style</td>
              <td style="text-wrap: nowrap"><?= isset($value->style) ? $value->style : "" ?></td>
            </tr>
          </tbody>
        </table>
      </div>
      @endforeach



    </div>

    <div class="col-lg-4">

@php
    $bottomdata = json_decode($row->bottom_data);
@endphp
@foreach ($bottomdata as  $key => $value)
        <div class="bsc-tbl-bdr">
        <table class="table table-bordered">
          <tbody>
            <tr>
              <td colspan="2" style="text-wrap: nowrap">
                Selected Category
              </td>
              <td colspan="2" style="color: red; text-wrap: nowrap">
                <?php if(isset($value->type)){ echo $value->type;} ?>
              </td>
            </tr>
          </tbody>
        </table>
      </div>

      <div class="bsc-tbl-bdr">
        <table class="table table-bordered">
          <thead>
            <tr>
              <th style="text-wrap: nowrap">Particulars</th>
              <th style="text-wrap: nowrap">Body Size</th>
              <th style="text-wrap: nowrap">Losing</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td style="text-wrap: nowrap">Length</td>
              <td style="text-wrap: nowrap"><?= isset($value->length->body_size) ? $value->length->body_size : "" ?></td>
              <td style="text-wrap: nowrap"><?= isset($value->length->losing) ? $value->length->losing : "" ?></td>
            </tr>

            <tr>
              <td style="text-wrap: nowrap">Waist</td>
              <td style="text-wrap: nowrap"><?= isset($value->waist->body_size) ? $value->waist->body_size : "" ?></td>
              <td style="text-wrap: nowrap"><?= isset($value->waist->losing) ? $value->waist->losing : "" ?></td>
            </tr>

            <tr>
              <td style="text-wrap: nowrap">Hip</td>
              <td style="text-wrap: nowrap"><?= isset($value->hip->body_size) ? $value->hip->body_size : "" ?></td>
              <td style="text-wrap: nowrap"><?= isset($value->hip->losing) ? $value->hip->losing : "" ?></td>
            </tr>

            <tr>
              <td style="text-wrap: nowrap">Pockland</td>

              <td style="text-wrap: nowrap"><?= isset($value->pockland->body_size) ? $value->pockland->body_size : "" ?></td>
              <td style="text-wrap: nowrap"><?= isset($value->pockland->losing) ? $value->pockland->losing : "" ?></td>
            </tr>

            <tr>
              <td style="text-wrap: nowrap">Thigh</td>

              <td style="text-wrap: nowrap"><?= isset($value->thigh->body_size) ? $value->thigh->body_size : "" ?></td>
              <td style="text-wrap: nowrap"><?= isset($value->thigh->losing) ? $value->thigh->losing : "" ?></td>
            </tr>

            <tr>
              <td style="text-wrap: nowrap">Knee</td>

              <td style="text-wrap: nowrap"><?= isset($value->knee->body_size) ? $value->knee->body_size : "" ?></td>
              <td style="text-wrap: nowrap"><?= isset($value->knee->losing) ? $value->knee->losing : "" ?></td>
            </tr>

            <tr>
              <td style="text-wrap: nowrap">Potree</td>

              <td style="text-wrap: nowrap"><?= isset($value->potree->body_size) ? $value->potree->body_size : "" ?></td>
              <td style="text-wrap: nowrap"><?= isset($value->potree->losing) ? $value->potree->losing : "" ?></td>
            </tr>

            <tr>
              <td style="text-wrap: nowrap">Btm</td>

              <td style="text-wrap: nowrap"><?= isset($value->btm->body_size) ? $value->btm->body_size : "" ?></td>
              <td style="text-wrap: nowrap"><?= isset($value->btm->losing) ? $value->btm->losing : "" ?></td>
            </tr>

            <tr>
              <td style="text-wrap: nowrap">Hight</td>
              <td style="text-wrap: nowrap"><?= isset($value->hight->body_size) ? $value->hight->body_size : "" ?></td>
              <td style="text-wrap: nowrap"><?= isset($value->hight->losing) ? $value->hight->losing : "" ?></td>
            </tr>

            <tr>
              <td style="text-wrap: nowrap">Style</td>

              <td style="text-wrap: nowrap"><?= isset($value->style) ? $value->style : "" ?></td>
            </tr>
          </tbody>
        </table>
      </div>

      @endforeach


    </div>
  </div>
