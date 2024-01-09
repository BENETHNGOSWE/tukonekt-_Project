 <div class="container">
     <div class="row">
         <div class="col-md-8 offset-md-2">
             <div class="card">
                 <div class="card-header">
                     User Profile
                 </div>
                 <div class="card-body">
                     <table class="table">
                         <tbody>
                             <tr>
                                 <th scope="row">ID</th>
                                 <td>{{ $user->modified_id }}</td>
                             </tr>
                           
                             <tr>
                                 <th scope="row">First Name</th>
                                 <td>{{ $user->first_name }}</td>
                             </tr>
                             <tr>
                                 <th scope="row">Last Name</th>
                                 <td>{{ $user->last_name }}</td>
                             </tr>
                             <tr>
                                 <th scope="row">Phone Number</th>
                                 <td>{{ $user->phone_number }}</td>
                             </tr>
                             <!-- Add more fields as needed -->
                         </tbody>
                     </table>
                 </div>
             </div>
         </div>
     </div>
 </div>