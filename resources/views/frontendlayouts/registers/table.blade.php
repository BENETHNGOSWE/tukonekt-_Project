
<table class="table">
    <thead>
      <tr>
        <th>Name</th>
        <th>Phone Number</th>
        <th>Qrcode</th>
      </tr>
    </thead>
    <tbody>
        @foreach ($registers as $register)
            <tr>
            <td>{{ $register->first_name}}</td>
            <td>{{ $register->phone_number}}</td>
            <td>
                {!!qrcode(null,$register->id)!!}
            </td>
            </tr>
        @endforeach
    </tbody>
  </table>
