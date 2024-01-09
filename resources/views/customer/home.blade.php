@extends('layouts.customer')
@section('title', 'User Dashboard')
@section('web_style')
    <style type="text/css" media="screen">
        .profile-image{
        position: relative;
        opacity: 1;
        display: block;
        width: 100%;
        height: auto;
        transition: .5s ease;
        backface-visibility: hidden;
        }

        .middle {
        transition: .5s ease;
        opacity: 0;
        position: absolute;
        top: 23%;
        left: 50%;
        transform: translate(-50%, -50%);
        -ms-transform: translate(-50%, -50%);
        text-align: center;
    }

        /*.text:hover {
        opacity: 0.3;
        }*/

        .middle:hover {
        opacity: 0.8;
        }

        .text {
        background-color: #04AA6D;
        color: white;
        font-size: 16px;
        padding: 16px 32px;
        }
        .list li{
            border-top:2px sloid rgb(14, 13, 13);
        }
    </style>
@endsection

    @section('navbar')
        {{-- @include('website.include.navbar') --}}
    @endsection

@section('content')



  <div class="container mt-4">

    @include('customer.include.header')



    <div class="row">
      <div class="col-md-4">

        @include('customer.include.profile')

      </div>
      <div class="col-md-8">

        <div class="card">
          <div class="card-body">
            <div class="row my-3">

              <div class="card px-2 mx-4">
                <div class="card-body text-success">
                  <div class="card-title"> Total Order</div>
                  <p style="color: rgb(44, 8, 8); font-weight:bold" class="card-text text-center">14</p>
                </div>
              </div>

              <div class="card mx-4">
                <div class="card-body text-success">
                  <div class="card-title"> Complete Order</div>
                  <p style="color: rgb(44, 8, 8); font-weight:bold" class="card-text text-center">13</p>
                </div>
              </div>

            <div class="card mx-4">
                <div class="card-body text-warning">
                <div class="card-title"> Return Order</div>
                <p style="color: rgb(44, 8, 8); font-weight:bold" class="card-text text-center">12</p>
                </div>
            </div>

              <div class="card mx-4">
                <div class="card-body text-danger">
                  <div class="card-title"> Cencel Order</div>
                  <p style="color: rgb(44, 8, 8); font-weight:bold" class="card-text text-center">11</p>
                </div>
              </div>

            </div>


            <h5 class="card-title">Order History</h5>
            <table class="table table-striped">
              <thead>
                <tr>
                  <th scope="col">Order ID</th>
                  <th scope="col">Date</th>
                  <th scope="col">Total</th>
                  <th scope="col">Payment Type</th>
                  <th scope="col">Status</th>
                </tr>
              </thead>
                <tbody>
                        <tr>
                            <th>nahid</th>
                            <td>nahid</td>
                            <td>nahid</td>
                            <td>nahid</td>
                            <td> nahid</td>
                        </tr>
                </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
  </div>

@endsection

@push('web_script')
    <script>


    </script>

@endpush
