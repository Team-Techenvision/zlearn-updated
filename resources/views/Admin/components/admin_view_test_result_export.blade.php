<table>
    <thead>
    <tr>
        <th>Sr no. </th>
        <th>Test Name</th>   
        <th>Student Name</th>   
        <th>College Name</th> 
        <th>Branch Name</th>
        <th>Total Marks</th>
        <th>Student Score</th>

    </tr>
    </thead>
    <tbody>
        <?php  $i = 1; ?>
    @foreach($test_result as $row)
        <tr>
            <td>{{ $i++ }}</td>   
            <td>{{ $row->test_name }}</td>
            <td>{{ $row->name }}</td>
            <td>{{ $row->college_name }}</td>
            <td>{{ $row->branch_name }}</td>
            <td>{{ $row->total_marks }}</td>
            <td>{{ $row->total_score }}</td>

            <td></td>
            
        </tr>
    @endforeach
    </tbody>
  </table>