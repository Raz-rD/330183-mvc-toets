<php 

@model IEnumerable<mvcframework.country>
    <h4>Country index</h4>
    <hr/>
    <table cellpadding="0" cellspacing="0">
        <tr>
            <th>Id</th>
            <th>Land</th>
            <th>Hoofdstad</th>
            <th>Continent</th>
            <th>AantalInwoners</th>
        </tr>
        @foreach (Country country in Country)
        {
            <tr>
                <td>@country.ID</td>
                <td>@country.Land</td>
                <td>@country.Hoofdtstad</td>
                <td>@country.Continent</td>
                <td>@country.AantalInwoners </td>
            </tr>
        }
    </table>
    
?>