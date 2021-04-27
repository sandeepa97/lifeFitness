<div class="modal fade" id="memberstatuseditmodal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Add Membe Status</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form data-parsley-validate="" id="frmeditmemberstatus">
                <div class="modal-body">
                    {{csrf_field()}}
                    <div class="form-group">
                            <div class="row">
                                <div class="col-md-6">
                                    <label for="member_id">Member ID - Name</label>
                                    <!-- <input type="text"  class="form-control" id="member_id" name="member_id" placeholder="Member ID"> -->
                                    <!-- <select name="member_id"  id="editmember_id" class="form-control">
                                    </select> -->
                                    <input type="hidden" name="member_id"  id="editmember_id" class="form-control">
                                    <input type="text" name="member_name"  id="editmember_name" class="form-control" disabled>
                                    
                                    

                                    <input type="hidden" name="hdnmemberstatus_id" id="hdnmemberstatus_id"/>
                                </div>
                            </div>
                        </div>
                    <!-- <div class="form-group">
                            <div class="row">
                                <div class="col-md-6">
                                    <label for="fname">First Name</label>
                         
                                    <select name="fname"  id="fname" class="form-control">
                                    </select>
                                </div>
                                <div class="col-md-6">
                                    <label for="lname">Last Name</label>
                                 
                                    <select name="lname"  id="lname" class="form-control">
                                    </select>
                                </div>
                            </div>
                    </div> -->
                    <div class="form-group">
                        <div class="row">
                            <div class="col-md-4">
                                <label for="height_cm">Height (CM)</label>
                                <input type="text" class="form-control" id="editheight_cm" name="height_cm" placeholder="Height (CM)" required data-parsley-pattern="[0-9 .]+$" data-parsley-trigger="keyup">
                            </div>
                            <div class="col-md-4">
                                <label for="weight_kg">Weight (KG)</label>
                                <input type="text" class="form-control" id="editweight_kg" name="weight_kg" placeholder="Weight (KG)" required data-parsley-pattern="[0-9 .]+$" data-parsley-trigger="keyup">
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="row">
                        <div class="col-md-4">
                                <!-- <label for="bmi">Body Mass Index</label> -->
                                <input type="hidden" class="form-control" id="editbmi" name="bmi" placeholder="Body Mass Index">
                            </div>
                        <div class="col-md-4">
                                <!-- <label for="member_status_type_id">Status</label> -->
                                <!-- <select name="member_status_type_id"  id="editmember_status_type_id" class="form-control">
                                </select> -->
                                <input type="hidden" class="form-control" id="editmember_status_type_id" name="member_status_type_id" placeholder="Member Status Type">
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


