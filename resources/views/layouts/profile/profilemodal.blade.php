<!-- Profile Modal -->
<div class="modal fade" id="profileModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content bg-lightblue text-dark">
            <div class="modal-header bg-lightblue-secondary text-white">
                <h3 class="modal-title">
                    <i class="fas fa-solid fa-users"></i>
                    Profile
                </h3>
                <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">x</span>
                </button>
            </div>
            <div class="modal-body">
                <center> 
               
                    @if(Auth::user()->avatar)
                        <img src="{{ asset('storage/' . Auth::user()->avatar) }}" alt="Profile Picture" style="width: 120px;" class="img-profile rounded-circle">
                    @else
                        <img src="{{ asset('dashboard/assets/img/undraw_profile.svg') }}" alt="Default Profile Picture" style="width: 80px;" class="img-profile rounded-circle">
                    @endif 
                    
                    <h3>{{ucwords(Auth::user()->firstname . " " . Auth::user()->lastname)}}</h3>
                </center>
                <p></p>
               
                <div class="card-header">
                    <th>Role : </th>
                    <td>
                        @if(Auth::user()->role == 'admin')
                            <span class="badge badge-lightblue">{{Auth::user()->role }}</span>
                        @elseif(Auth::user()->role == 'customer')
                            <span class="badge badge-danger">{{ Auth::user()->role }}</span>
                        @endif
                    </td>
                </div>
               
                <div class="card-header">
                    <th>Name :</th>
                    <td>{{Auth::user()->name}}</td> 
                </div>
                
                <div class="card-header">
                    <th>Email : {{Auth::user()->email}}</th>
                </div>
                <br>
                <p style="padding-left: 17vh;">
                    
                    <button class="btn btn-danger" type="button" data-dismiss="modal">Cancel</button>
                    
                    <a href="{{ route('role.edit', Auth::user()->id) }}" class="btn btn-outline-dark">
                        
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pencil-square" viewBox="0 0 16 16">
                            <path d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z"></path>
                            <path fill-rule="evenodd" d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5z"></path>
                        </svg>
                        Edit Profile    
                    </a> 
                </p>
            </div>
        </div>
    </div>
</div>


<script>
    var cancelButton = document.querySelector('#profileModal button[data-dismiss="modal"]');
    cancelButton.addEventListener('click', function() {
        $('#profileModal').modal('hide');
    });
</script>
