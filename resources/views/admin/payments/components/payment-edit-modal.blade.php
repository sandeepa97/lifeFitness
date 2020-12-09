<div class="modal fade" id="paymenteditmodal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Edit Payment</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form data-parsley-validate="" id="editfrmpayment">
                <div class="modal-body">
                    {{csrf_field()}}
                
                    <div class="form-group">
                            <div class="row">
                                <div class="col-md-6">
                                    <label for="member_id">Member ID</label>
                                    <input type="text"  class="form-control" id="editmember_id" name="member_id" placeholder="Member ID">
                                </div>
                                <input type="hidden" name="hdnpaymentid" id="hdnpaymentid"/>
                            </div>
                        </div>
                    <div class="form-group">
                            <div class="row">
                                <div class="col-md-6">
                                    <label for="fname">First Name</label>
                                    <input type="text"  class="form-control" id="editfname" name="fname" placeholder="First Name">
                                </div>
                                <div class="col-md-6">
                                    <label for="lname">Last Name</label>
                                    <input type="text"  class="form-control" id="editlname" name="lname" placeholder="Last Name">
                                </div>
                            </div>
                        </div>
                    <div class="form-group">
                        <div class="row">
                            <div class="col-md-4">
                                <label for="date">Date</label>
                                <input type="date" class="form-control" id="editdate" name="date" placeholder="Date">
                            </div>
                            <div class="col-md-4">
                                <label for="payment_type">Payment Type</label>
                                <select name="payment_type"  id="editpayment_type" class="form-control">
                                    <option value="Male">Registration Fee</option>
                                    <option value="Female">Monthly Membership Fee</option>
                                    <option value="Female">bla bla others</option>
                                </select>
                            </div>

                        </div>
                    </div>
                    <div class="form-group">
                        <div class="row">
                            <div class="col-md-6">
                                <label for="amount">Payment Amount</label>
                                <input type="text" name="amount" id="editamount" class="form-control" placeholder="Payment Amount"/>
                            </div>
                        </div>
                    </div>
                </div>


                <div class="modal-footer">
                    <button type="submit" class="btn btn-primary">Save</button>
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                </div>
            </form>
        </div>
    </div>
  </div>
