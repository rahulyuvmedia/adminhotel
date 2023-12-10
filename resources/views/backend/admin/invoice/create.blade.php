@extends('backend.layouts.master')
@section('title', 'Invoice')
@section('content')

    <form action="{{ Route('admin.invoice.store') }}" enctype="multipart/form-data"
                            method="post" accept-charset="utf-8" class="needs-validation">
                            @csrf
                            <input type="hidden" name="guest_id" value="{{$_GET['id']}}" /> 
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
                                        <input type="text" class="form-control"  disabled placeholder="3905"
                                            value="{{ getInvoiceNumber($guest) }}" id="invoiceId" />
                                              <input type="hidden" class="form-control"  name="invoice_number" placeholder="3905"
                                            value="{{ getInvoiceNumber($guest) }}" id="invoiceId" />
                                    </div>
                                </dd>
                                <dt class="col-sm-6 mb-2 mb-sm-0 text-md-end ps-0">
                                    <span class="fw-normal">Date:</span>
                                </dt>
                                <dd class="col-sm-6 d-flex justify-content-md-end pe-0 ps-0 ps-sm-2">
                                    <input type="text" class="form-control w-px-150 date-picker"
                                        placeholder="YYYY-MM-DD" />
                                </dd>
                                <dt class="col-sm-6 mb-2 mb-sm-0 text-md-end ps-0">
                                    <span class="fw-normal">Due Date:</span>
                                </dt>
                                <dd class="col-sm-6 d-flex justify-content-md-end pe-0 ps-0 ps-sm-2">
                                    <input type="text" class="form-control w-px-150 date-picker"
                                        placeholder="YYYY-MM-DD" />
                                </dd>
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
                            <p class="mb-0">{{ $guest->email }}</p>
                        </div>
                        <div class="col-md-6 col-sm-7">
                            <h6 class="mb-4">Bill To:</h6>
                            <table>
                                <tbody>
                                    <tr>
                                        <td class="pe-4">Total Due:</td>
                                        <td><span class="fw-medium">$12,110.55</span></td>
                                    </tr>
                                    <tr>
                                        <td class="pe-4">Bank name:</td>
                                        <td>American Bank</td>
                                    </tr>
                                    <tr>
                                        <td class="pe-4">Country:</td>
                                        <td>United States</td>
                                    </tr>
                                    <tr>
                                        <td class="pe-4">IBAN:</td>
                                        <td>ETD95476213874685</td>
                                    </tr>
                                    <tr>
                                        <td class="pe-4">SWIFT code:</td>
                                        <td>BR91905</td>
                                    </tr>
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
                                            <p class="mb-2 repeater-title">Total Amount </p>
                                            <input type="number" name='total_amount' id='total_amount'
                                                class="form-control invoice-item-price mb-3"
                                                value="{{ getStayPrice($guest) }}" placeholder="00" />

                                        </div>
                                        <div class="col-md-3 col-12 mb-md-0 mb-3">
                                            <p class="mb-2 repeater-title">Due Amount </p>
                                            <input type="number" name='due_amount' id='due_amount'
                                                class="form-control invoice-item-price mb-3" placeholder="00"
                                                min="12" />

                                        </div>
                                        <div class="col-md-3 col-12 mb-md-0 mb-3">
                                            <p class="mb-2 repeater-title">Total Paid Amount </p>
                                            <input type="number" name='total_paid_amount' id='total_paid_amount'
                                                class="form-control invoice-item-price mb-3" placeholder="00"
                                                min="12" />

                                        </div>

                                        <div class="col-md-3 col-12 mb-md-0 mb-3">
                                            <p class="mb-2 repeater-title">Additional Charges </p>
                                            <input type="number" name='additional_charges' id='additional_charges'
                                                class="form-control invoice-item-price mb-3" placeholder="00"
                                                min="12" />
                                        </div>



                                        <div class="col-md-5 col-12 pe-0">
                                            <p class="mb-2 repeater-title">Price</p>
                                            <p id="price_display" class="mb-0"> <!-- Display the calculated price here -->
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
                                                        <label for="discountInput" class="form-label">Discount(%)</label>
                                                        <input type="number" class="form-control" id="discountInput"
                                                            min="0" max="100" />
                                                    </div>
                                                    <div class="col-md-12">
                                                        <label for="taxInput1" class="form-label">Tax 1</label>
                                                        <select name="tax-1-input" id="taxInput1"
                                                            class="form-select tax-select">
                                                            <option value="0%" selected>0%</option>
                                                            <option value="1%">1%</option>
                                                            <option value="10%">10%</option>
                                                            <option value="18%">18%</option>
                                                            <option value="40%">40%</option>
                                                        </select>
                                                    </div>

                                                </div>
                                                <div class="dropdown-divider my-3"></div>
                                                <button type="button"
                                                    class="btn btn-label-primary btn-apply-changes">Apply</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <hr class="my-3 mx-n4" />

                        <div class="row p-0 p-sm-4">
                            <div class="col-md-6 mb-md-0 mb-3">
                                <div class="d-flex align-items-center mb-3">
                                    <label for="salesperson" class="form-label me-4 fw-medium">Salesperson:</label>
                                    <input type="text" class="form-control ms-3" id="salesperson"
                                        placeholder="Edward Crowley" />
                                </div>
                                <input type="text" class="form-control" id="invoiceMsg"
                                    placeholder="Thanks for your business" />
                            </div>
                            <div class="col-md-6 d-flex justify-content-end">
                                <div class="invoice-calculations">
                                    <div class="d-flex justify-content-between mb-2">
                                        <span class="w-px-100">Subtotal:</span>
                                        <span class="fw-medium">$00.00</span>
                                    </div>
                                    <div class="d-flex justify-content-between mb-2">
                                        <span class="w-px-100">Discount:</span>
                                        <span class="fw-medium">$00.00</span>
                                    </div>
                                    <div class="d-flex justify-content-between mb-2">
                                        <span class="w-px-100">Tax:</span>
                                        <span class="fw-medium">$00.00</span>
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


                        <div class="row px-0 px-sm-4">
                            <div class="col-12">
                                <div class="mb-3">
                                    <label for="note" class="form-label fw-medium">Note:</label>
                                    <textarea class="form-control" rows="2" id="note" placeholder="Invoice note"></textarea>
                                </div>
                            </div>
                        </div>


                        <div class="row pb-4">
                            <div class="col-12">
                                <button type="button" class="btn btn-primary" data-repeater-create>Add Item</button>
                            </div>
                        </div>
                    </div>



                </div>
            </div>
        </div>
        <!-- /Invoice Add-->

        <!-- Invoice Actions -->
        <div class="col-lg-3 col-12 invoice-actions">
            <div class="card mb-4">
                <div class="card-body">
                    <button class="btn btn-primary d-grid w-100 mb-2" data-bs-toggle="offcanvas"
                        data-bs-target="#sendInvoiceOffcanvas">
                        <span class="d-flex align-items-center justify-content-center text-nowrap"><i
                                class="ti ti-send ti-xs me-2"></i>Send Invoice</span>
                    </button>
                    <a href="app-invoice-preview.html" class="btn btn-label-secondary d-grid w-100 mb-2">Preview</a>
                    <button type="submit" class="btn btn-label-secondary d-grid w-100">Save</button>
                </div>
            </div>
            <div>
                <p class="mb-2">Accept payments via</p>
                <select class="form-select mb-4">
                    <option value="Bank Account">Bank Account</option>
                    <option value="Paypal">Paypal</option>
                    <option value="Card">Credit/Debit Card</option>
                    <option value="UPI Transfer">UPI Transfer</option>
                </select>
                <div class="d-flex justify-content-between mb-2">
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
                </div>
            </div>
        </div>
        <!-- /Invoice Actions -->
      
    </div>
 </form>
<script>
    $(document).ready(function() {
        function updatePrice() {
            var totalAmount = parseFloat($('#total_amount').val()) || '';
            var additionalCharges = parseFloat($('#additional_charges').val()) || '';
            var totalPrice = totalAmount + additionalCharges;

            $('#price_display').text(totalPrice.toFixed(2)); 
        }

        $('#total_amount, #additional_charges').on('input', function() {
            updatePrice();
        });

        updatePrice();
    });
</script>
@stop
