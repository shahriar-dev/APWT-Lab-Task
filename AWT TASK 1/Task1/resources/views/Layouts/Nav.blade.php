

<html>
    <body>
    
        <table width=80%>
            <tr><b>
                <td>
                    <a href="{{ route('Homee') }}">Home </a>
                </td>

                <td>
                    <a href="{{ route('About') }}">About </a>
                </td>

                <td>
                    <a href="{{ route('Service') }}">Service/Product </a>
                </td>

                <td>
                     <a href="{{ route('Teams') }}">Teams </a>       
                </td>

                <td>
                     <a href="{{ route('Contact') }}">Contact </a>
                </td>
</b>
            </tr>
        </table>

        @yield('content')
    </body>

</html>