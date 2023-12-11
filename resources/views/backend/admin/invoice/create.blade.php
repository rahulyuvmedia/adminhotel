@extends('backend.layouts.master')
@section('title', 'Invoice')
@section('content')
    @if (session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    @if (session('error'))
        <div class="alert alert-danger">
            {{ session('error') }}
        </div>
    @endif
    <form action="{{ Route('admin.invoice.store') }}" enctype="multipart/form-data" method="post" accept-charset="utf-8"
        class="needs-validation">
        @csrf
        <input type="hidden" name="guest_id" value="{{ $_GET['id'] }}" />
        <div class="row invoice-add">

            <div class="col-lg-9 col-12 mb-lg-0 mb-4">
                <div class="card invoice-preview-card">
                    <div class="card-body">
                        <div class="row m-sm-4 m-0">
                            <div class="col-md-7 mb-md-0 mb-4 ps-0">
                                <div class="d-flex svg-illustration mb-4 gap-2 align-items-center">
                                    <div class="app-brand-logo demo">
                                        <img src="{{ URL::to('/assets/img/icon.svg') }}" class="img-fluid" />
                                    </div>
                                    <span class="app-brand-text fw-bold fs-4">
                                        Yuvmedia
                                    </span>
                                </div>
                                <p class="mb-2">{{ Auth::user()->business_name }}</p>


                                <p class="mb-2">{{ Auth::user()->address }}</p>
                                <p class="mb-2">{{ Auth::user()->mobile }}</p>
                                <p class="mb-3">{{ Auth::user()->email }}</p>
                            </div>
                            <div class="col-md-5">
                                <dl class="row mb-2">
                                    <dt class="col-sm-6 mb-2 mb-sm-0 text-md-end ps-0">
                                        <span class="h4 text-capitalize mb-0 text-nowrap">Invoice</span>
                                    </dt>
                                    <dd class="col-sm-6 d-flex justify-content-md-end pe-0 ps-0 ps-sm-2">
                                        <div class="input-group input-group-merge disabled w-px-150">
                                            <span class="input-group-text">#</span>
                                            <input type="text" class="form-control" disabled placeholder="3905"
                                                value="{{ getInvoiceNumber($guest) }}" id="invoiceId" />
                                            <input type="hidden" class="form-control" name="invoice_number"
                                                placeholder="3905" value="{{ getInvoiceNumber($guest) }}" id="invoiceId" />
                                        </div>
                                    </dd>
                                    <dt class="col-sm-6 mb-2 mb-sm-0 text-md-end ps-0">
                                        <span class="fw-normal">Date:</span>
                                    </dt>
                                    <dd class="col-sm-6 d-flex justify-content-md-end pe-0 ps-0 ps-sm-2">
                                        <input type="text"
                                            class="form-control w-px-150 date-picker @error('billing_date') is-invalid @enderror"
                                            placeholder="DD-MM-YYYY" name='billing_date' id="billing_date" />
                                        @error('billing_date')
                                            <!-- No specific error message displayed -->
                                        @enderror
                                    </dd>


                                    <!-- <dt class="col-sm-6 mb-2 mb-sm-0 text-md-end ps-0">
                                                                                                <span class="fw-normal">Due Date:</span>
                                                                                            </dt>
                                                                                            <dd class="col-sm-6 d-flex justify-content-md-end pe-0 ps-0 ps-sm-2">
                                                                                                <input type="text" class="form-control w-px-150 date-picker"
                                                                                                    placeholder="DD-MM-YYY" />
                                                                                            </dd> -->
                                </dl>
                            </div>
                        </div>

                        <hr class="my-3 mx-n4" />

                        <div class="row p-sm-4 p-0">
                            <div class="col-md-6 col-sm-5 col-12 mb-sm-0 mb-4">
                                <h6 class="mb-4">Invoice To:</h6>
                                <p class="mb-1">{{ $guest->name }}</p>
                                <p class="mb-1">{{ $guest->address }}</p>

                                <p class="mb-1">{{ $guest->mobile }}</p>
                                <p class="mb-1">{{ $guest->email }}</p>
                                <p class="mb-1">{{ $guest->reservations->check_in->format('d/m/Y h:i A') }} →
                                    {{ $guest->reservations->check_out->format('d/m/Y h:i A') }} </p>

                                <?php $stayPrice = getStayPrice($guest); ?>
                                <span id='room_charge_display' class="" style="border: none; color:gray;"
                                    readonly>{!! $stayPrice['formattedStayAmount'] !!}</span>
                            </div>
                            <div class="col-md-6 col-sm-7">
                                <h6 class="mb-4">Bill To:</h6>
                                <table>
                                    <tbody>
                                        <tr id="payment_method_row">
                                            <td class="pe-4">Payment Method:</td>
                                            <td><span class="fw-medium"></span></td>
                                        </tr>
                                        <tr id="account_holder_row">
                                            <td class="pe-4">Account Holder Name:</td>
                                            <td></td>
                                        </tr>
                                        <tr id="account_detail_row">
                                            <td class="pe-4">Account detail:</td>
                                            <td></td>
                                        </tr>
                                        <!-- <tr>
                                                                                                    <td class="pe-4">IBAN:</td>
                                                                                                    <td>ETD95476213874685</td>
                                                                                                </tr>
                                                                                                <tr>
                                                                                                    <td class="pe-4">SWIFT code:</td>
                                                                                                    <td>BR91905</td>
                                                                                                </tr> -->
                                    </tbody>
                                </table>
                            </div>
                        </div>

                        <hr class="my-3 mx-n4" />

                        <div class="source-item pt-4 px-0 px-sm-4">

                            <div class="mb-3" data-repeater-list="group-a">
                                <div class="repeater-wrapper pt-0 pt-md-4" data-repeater-item>
                                    <div class="d-flex border rounded position-relative pe-0">
                                        <div class="row w-100 p-3">


                                            <div class="col-md-3 col-12 mb-md-0 mb-3">
                                                <p class="mb-2 repeater-title">Room Charge</p>
                                                <input type="number" name='room_charge' id='room_charge'
                                                    class="form-control invoice-item-price mb-3 @error('room_charge') is-invalid @enderror"
                                                    value="{{ $stayPrice['totalStayAmount'] }}" placeholder="00" />

                                            </div>
                                            <div class="col-md-3 col-12 mb-md-0 mb-3">
                                                <p class="mb-2 repeater-title">Additional Charges </p>
                                                <input type="number" name='additional_charges' id='additional_charges'
                                                    class="form-control invoice-item-price mb-3  @error('additional_charges') is-invalid @enderror"
                                                    placeholder="00" maxlength="6" />
                                            </div>
                                            <div class="col-md-3 col-12 mb-md-0 mb-3">
                                                <p class="mb-2 repeater-title">Due Amount </p>
                                                <input type="number" name='due_amount' id='due_amount'
                                                    class="form-control invoice-item-price mb-3  @error('due_amount') is-invalid @enderror"
                                                    placeholder="00" min="12" />

                                            </div>
                                            <div class="col-md-3 col-12 mb-md-0 mb-3">
                                                <p class="mb-2 repeater-title">Total Paid Amount </p>
                                                <input type="number" name='total_paid_amount' id='total_paid_amount'
                                                    class="form-control invoice-item-price mb-3  @error('total_paid_amount') is-invalid @enderror"
                                                    placeholder="00" min="12" />

                                            </div>





                                            <div class="col-md-5 col-12 pe-0">
                                                <p class="mb-2 repeater-title">Price</p>
                                                <p id="price_display" class="mb-0">
                                                    <!-- Display the calculated price here -->
                                                </p>
                                            </div>
                                        </div>
                                        <div
                                            class="d-flex flex-column align-items-center justify-content-between border-start p-2">
                                            <i class="ti ti-x cursor-pointer" data-repeater-delete></i>
                                            <div class="dropdown">
                                                <i class="ti ti-settings ti-xs cursor-pointer more-options-dropdown"
                                                    role="button" id="dropdownMenuButton" data-bs-toggle="dropdown"
                                                    data-bs-auto-close="outside" aria-expanded="false">
                                                </i>
                                                <div class="dropdown-menu dropdown-menu-end w-px-300 p-3"
                                                    aria-labelledby="dropdownMenuButton">

                                                    <div class="row g-3">
                                                        <div class="col-12">
                                                            <label for="discountInput"
                                                                class="form-label">Discount(%)</label>
                                                            <input type="number" name='discount' id='discount'
                                                                class="form-control invoice-item-price mb-3 @error('discount') is-invalid @enderror"
                                                                placeholder="00"
                                                                {{ isset($dueAmount) && $dueAmount > 0 ? 'disabled' : '' }} />
                                                        </div>
                                                        <div class="col-md-12">
                                                            <label for="taxInput1" class="form-label">Tax </label>
                                                            <select name="tax_amount" id="tax_amount"
                                                                class="form-select tax-select @error('tax_amount') is-invalid @enderror">
                                                                <option value="" selected>0%</option>
                                                                <option value="1%">1%</option>
                                                                <option value="10%">10%</option>
                                                                <option value="18%">18%</option>
                                                                <option value="40%">40%</option>
                                                            </select>
                                                        </div>

                                                    </div>
                                                    <div class="dropdown-divider my-3"></div>

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <hr class="my-3 mx-n4" />

                            <div class="row p-0 p-sm-4">
                                <div class="col-md-6 mb-md-0 mb-3">
                                    <div class="mb-3">
                                        <label for="note" class="form-label fw-medium">Note:</label>
                                        <textarea class="form-control @error('notes') is-invalid @enderror" rows="2" id="notes" name='notes'
                                            placeholder="Invoice note"></textarea>
                                    </div>
                                </div>

                                <div class="col-md-6 d-flex justify-content-end">
                                    <div class="invoice-calculations">
                                        <div class="d-flex justify-content-between mb-2">
                                            <span class="w-px-100">Subtotal:</span>
                                            <span id='room_charge_display' class="" style="border: none;"
                                                readonly>{!! $stayPrice['formattedStayAmount'] !!}</span>
                                        </div>
                                        <div class="d-flex justify-content-between mb-2">
                                            <span class="w-px-100">Additional Charges:</span>
                                            <span id="additional_charges_display" class="fw-medium"></span>
                                        </div>

                                        <div class="d-flex justify-content-between mb-2">
                                            <span class="w-px-100">Due Amount:</span>
                                            <span id="due_amount_display" class="fw-medium"></span>
                                        </div>

                                        <div class="d-flex justify-content-between mb-2">
                                            <span class="w-px-100">Discount(%):</span>
                                            <span id="discount_display" class="fw-medium"></span>
                                        </div>
                                        <div class="d-flex justify-content-between mb-2">
                                            <span class="w-px-100">Tax :</span>
                                            <span id="tax_display" class="fw-medium"></span>
                                        </div>
                                        <hr />
                                        <div class="d-flex justify-content-between">
                                            <span class="w-px-100">Total:</span>
                                            <span class="fw-medium">$00.00</span>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <hr class="my-3 mx-n4" />


                            <!-- <div class="row px-0 px-sm-4">
                                                                                        <div class="col-12">
                                                                                            <div class="mb-3">
                                                                                                <label for="note" class="form-label fw-medium">Note:</label>
                                                                                                <textarea class="form-control @error('notes') is-invalid @enderror" rows="2" id="notes" name='notes'
                                                                                                    placeholder="Invoice note"></textarea>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div> -->


                            <!-- <div class="row pb-4">
                                                                                        <div class="col-12">
                                                                                            <button type="button" class="btn btn-primary" data-repeater-create>Add Item</button>
                                                                                        </div>
                                                                                    </div> -->
                        </div>



                    </div>
                </div>
            </div>
            <!-- /Invoice Add-->

            <!-- Invoice Actions -->
            <div class="col-lg-3 col-12 invoice-actions">
                <div class="card mb-4">
                    <div class="card-body">
                        <a class="btn btn-primary d-grid w-100 mb-2" href="javascript:void(0);" onclick="shareContent()"
                            data-bs-toggle="offcanvas" data-bs-target="#sendInvoiceOffcanvas">
                            <span class="d-flex align-items-center justify-content-center text-nowrap"><i
                                    class="ti ti-send ti-xs me-2"></i>Send Invoice</span>
                        </a>
                        <a href="app-invoice-preview.html" class="btn btn-label-secondary d-grid w-100 mb-2">Preview</a>
                        <button type="submit" class="btn btn-label-secondary d-grid w-100">Save</button>
                    </div>
                </div>
                <div>
                    <p class="mb-2">Accept payments via</p>
                    <select class="form-select mb-4 @error('pay_method') is-invalid @enderror" name='pay_method'
                        id='pay_method'>
                        <option value="" selected>Select Pay Method </option>

                        <option value="Bank Account">Bank Account</option>
                        <option value="Paypal">Paypal</option>
                        <option value="Card">Credit/Debit Card</option>
                        <option value="UPI Transfer">UPI Transfer</option>
                        <option value="Cash">Cash</option>

                    </select>

                    <div class="form-group mb-4" id="account_holder " style="display: block;">
                        <label for="account_holder">Account Holder Name</label>
                        <input type="text" class="form-control @error('account_holder') is-invalid @enderror"
                            id="account_holder" placeholder="Enter Account Holder Name" name="account_holder">
                    </div>

                    <div class="form-group mb-4" id="account_detail " style="display: block;">
                        <label for="account_detail">Account detail</label>
                        <input type="text" class="form-control @error('account_detail') is-invalid @enderror"
                            id="account_detail" placeholder="ACXXXXXXXXXXX" name="account_detail">
                    </div>




                    <!-- <div class="d-flex justify-content-between mb-2">
                                                                                <label for="payment-terms" class="mb-0">Payment Terms</label>
                                                                                <label class="switch switch-primary me-0">
                                                                                    <input type="checkbox" class="switch-input" id="payment-terms" checked />
                                                                                    <span class="switch-toggle-slider">
                                                                                        <span class="switch-on"></span>
                                                                                        <span class="switch-off"></span>
                                                                                    </span>
                                                                                    <span class="switch-label"></span>
                                                                                </label>
                                                                            </div>
                                                                            <div class="d-flex justify-content-between mb-2">
                                                                                <label for="client-notes" class="mb-0">Client Notes</label>
                                                                                <label class="switch switch-primary me-0">
                                                                                    <input type="checkbox" class="switch-input" id="client-notes" />
                                                                                    <span class="switch-toggle-slider">
                                                                                        <span class="switch-on"></span>
                                                                                        <span class="switch-off"></span>
                                                                                    </span>
                                                                                    <span class="switch-label"></span>
                                                                                </label>
                                                                            </div>
                                                                            <div class="d-flex justify-content-between">
                                                                                <label for="payment-stub" class="mb-0">Payment Stub</label>
                                                                                <label class="switch switch-primary me-0">
                                                                                    <input type="checkbox" class="switch-input" id="payment-stub" />
                                                                                    <span class="switch-toggle-slider">
                                                                                        <span class="switch-on"></span>
                                                                                        <span class="switch-off"></span>
                                                                                    </span>
                                                                                    <span class="switch-label"></span>
                                                                                </label>
                                                                            </div> -->
                </div>
            </div>
            <!-- /Invoice Actions -->

        </div>
    </form>
    <script>
        $(document).ready(function() {
            function updatePrice() {
                var totalAmount = parseFloat($('#room_charge').val()) || '';
                var additionalCharges = parseFloat($('#additional_charges').val()) || '';
                var totalPrice = totalAmount + additionalCharges;

                $('#price_display').text(totalPrice.toFixed(2));
            }

            $('#room_charge, #additional_charges').on('input', function() {
                updatePrice();
            });

            updatePrice();
        });
    </script>


    <script>
        function shareContent() {
            if (navigator.share) {
                navigator.share({
                        title: 'Your Share Title',
                        text: 'Your Share Text',
                        url: 'https://your-share-url.com'
                    })
                    .then(() => console.log('Shared successfully'))
                    .catch((error) => console.error('Error sharing:', error));
            } else {
                alert('Web Share API is not supported in this browser.');
            }
        }
    </script>


    <script>
        $(document).ready(function() {
            maxDigitLimit('#additional_charges', 6);

            function updatePrice() {
                var totalAmount = parseFloat($('#room_charge').val()) || 0;
                var additionalCharges = parseFloat($('#additional_charges').val()) || 0;
                var dueAmount = parseFloat($('#due_amount').val()) || 0;
                var discount = parseFloat($('#discount').val()) || 0;
                var taxAmount = parseFloat($('#tax_amount').val()) || 0;

                var totalPrice = totalAmount + additionalCharges;

                // Subtract Discount
                totalPrice -= (totalPrice * (discount / 100));

                // Subtract Due Amount
                if (dueAmount > 0) {
                    totalPrice -= dueAmount;
                }

                // Add Tax
                totalPrice += (totalPrice * (taxAmount / 100));

                $('#price_display').text('₹' + totalPrice.toFixed(2));
                $('#additional_charges_display').text('₹' + additionalCharges.toFixed(2));
                $('#due_amount_display').text('₹' + dueAmount.toFixed(2));
                $('#discount_display').text(discount.toFixed(2) + '%');
                $('#tax_display').text(taxAmount.toFixed(2) + '%');
            }

            $('#room_charge, #additional_charges, #due_amount, #discount, #tax_amount').on('input', function() {
                updatePrice();
            });

            updatePrice();
        });
    </script>

    <!-- <script>
        $(document).ready(function() {
            $('#pay_method').on('change', function() {
                var selectedMethod = $(this).val();

                $('#account_holder, #account_detail').hide();

                if (selectedMethod === 'Bank Account' || selectedMethod === 'UPI Transfer') {
                    $('#account_holder, #account_detail').show();
                } else {

                    $('#account_holder, #account_detail').hide();
                }
            });

            $('#account_holder, #account_detail').on('input', function() {
                updateTableRows();
            });

            function updateTableRows() {

                var paymentMethod = $('#pay_method').val();
                var accountHolder = $('#account_holder').val();
                var accountDetail = $('#account_detail').val();

                $('#payment_method_row span').text(paymentMethod);
                $('#account_holder_row td:eq(1)').text(accountHolder);
                $('#account_detail_row td:eq(1)').text(accountDetail);
            }
        });
    </script> -->

@stop
