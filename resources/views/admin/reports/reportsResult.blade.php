@extends('admin.layout.master')
@section('content')

<div class="modal-body">
    <input type="button" class="btn btn-success" onclick="generate()" value="Export To PDF" /> 
</div>
<div class="container mt-4">

            <div class="col-md-12 ">
                <table id="payment-report-table" class="table table-bordered">
                    <caption>LIFE FITNESS GYMS - PAYMENTS REPORT</caption>
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Member ID</th>
                            <th>Name</th>
                            <th>Date</th>
                            <th>Payment Type</th>
                            <th>Payment Amount</th>
                        </tr>

                    </thead>

                </table>
            </div>
</div>

@endsection

@section('custom-js')

<script>

        $('#payment-report-table').DataTable({

        ajax: baseUrl+'/admin/get-all-payments',
        columns: 
                [
                    {
                        "render": function ( data, type, full, meta ) {
                        return  meta.row + 1;
                        }
                    },
                    { data: 'member_id' },
                    { 
                    "data": null, 
                    render: function (data, type, row) {
                    var name = row.member.fname + " " + row.member.lname;
                    return name;
                    }
                    },
                    { data: 'date' },
                    { data: 'member_payments.payment_type' },
                    { data: 'amount' }
                ]
        });

//Export PDF
function generate() {  
    var doc = new jsPDF()
    doc.text(15, 10, "LIFE FITNESS GYMS - PAYMENTS REPORT"); 
    doc.autoTable({ 
      html: '#payment-report-table', 
      theme: 'plain'
      })
    doc.save('Payments_Report.pdf')
}  

</script>

@endsection