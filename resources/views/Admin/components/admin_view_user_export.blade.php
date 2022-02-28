<table>
    <thead>
    <tr>
        <th>Student Id </th>
        <th>Student First Name</th>
        <th>Student Last Name</th>
        <th>Mobile</th>
        <th>Email</th>
        <th>Gender</th>
        <th>DOB</th>
        <th>Blood Group</th>
        <th>Address</th>
        <th>State</th>        
        <th>College</th>
        <th>Course</th>
        <th>Branch</th>
        <th>Semester</th>
        <th>Roll No</th>
        <th>Education</th>
    </tr>
    </thead>
    <tbody>
        <?php  $i = 1; ?>
    @foreach($student as $row)
        <tr>
            <td>{{ $i++ }}</td>   
            <td>{{ $row->name }}</td>
            <td>{{ $row->l_name }}</td>
            <td>{{ $row->phone }}</td>
            <td>{{ $row->email }}</td>
            <td>{{ $row->gender }}</td>
            <td>{{ $row->dob }}</td>
            <td>{{ $row->blood_group }}</td>
            <td>{{ $row->address }}</td>
            <td>{{ $row->state }}</td>
            <td>{{ $row->college_name }}</td>
            <td>{{ $row->compus }}</td>
            <td>{{ $row->branch_name }}</td>
            <td>{{ $row->semister_name }}</td>
            <td>{{ $row->roll_no }}</td>
            <td>{{ $row->education }}</td>
        </tr>
    @endforeach
    </tbody>
  </table>