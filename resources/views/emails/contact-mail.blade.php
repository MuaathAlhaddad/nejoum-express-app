<!DOCTYPE html>
<html lang="ar" dir="ltr">
<head>
    <meta charSet="utf-8"/>
</head>
<body dir="ltr" style="margin: 0;padding: 0; background-color:#d2d9df; direction: ltr">
<table border="0" cellPadding="0" cellSpacing="0" width="100%">
    <tbody>
    <tr>
        <td align="center">
            <table border="0" cellPadding="0" cellSpacing="0" id="table-content"
                   style="padding: 0 16px;max-width:600px "
                   width="100%">
                <tbody>
                <tr>
                    <td align="left" valign="top" class="logo" style="color:#fff ;padding:40px 0">
                        <a href="http://nejoumexpress.net"> <img alt="logo"
                                                                 src="https://nejoumexpress.net/images/Logo Color.png"
                                                                 width="290"
                                                                 height="106"> </a>
                    </td>
                </tr>
                </tbody>
            </table>
        </td>
    </tr>
    <tr>
        <td align="center">
            <table border="0" cellPadding="0" cellSpacing="0" id="table-content2"
                   style="padding:0 16px; max-width: 600px" width="100%">
                <tbody>
                <tr>
                    <td align="left" bgcolor="#ffffff" class="content top"
                        style="padding:8px 20px;border-radius:8px 8px 0 0" valign="top">
                        <h1 class="email-title" style="line-height: 1.8; color:rgba(0, 0, 0, 0.8)">
                            Contact us Form
                        </h1>
                        <h3 class="p1" style="margin-top:36px;margin-bottom:16px;color:rgba(0, 0, 0, 0.8)">
                            Contact Details:
                        </h3>
                    </td>
                </tr>
                </tbody>
            </table>
        </td>
    </tr>
    <tr>
        <td align="center">
            <table border="0" cellPadding="0" cellSpacing="0" id="table-content3"
                   style="padding:0 16px; max-width:600px" width="100%">
                <tbody>
                <tr>
                    <td align="left" bgcolor="#ffffff" class="content bottom"
                        style="padding:8px 20px;border-radius:0 0 8px 8px">
                        <table border="0" cellPadding="0" cellSpacing="0" width="100%">
                            <tbody>
                            <tr>
                                <td align="left">
                                    <p style="line-height: 1.8 ;color:rgba(0, 0, 0, 0.8);margin-top: 0">
                                        Name: {{ $contact->name }}
                                    </p>
                                </td>
                            </tr>
                            <tr>
                                <td align="left">
                                    <p style="line-height: 1.8 ;color:rgba(0, 0, 0, 0.8);margin-top: 0">
                                        Email: {{ $contact->email }}
                                    </p>
                                </td>
                            </tr>
                            <tr>
                                <td align="left">
                                    <p style="line-height: 1.8 ;color:rgba(0, 0, 0, 0.8);margin-top: 0">
                                        Phone Number: {{ $contact->phone }}
                                    </p>
                                </td>
                            </tr>
                            <tr>
                                <td align="left">
                                    <p style="line-height: 1.8 ;color:rgba(0, 0, 0, 0.8);margin-top: 0">
                                        Subject: {{ $contact->subject }}
                                    </p>
                                </td>
                            </tr>
                            <tr>
                                <td align="left">
                                    <p style="line-height: 1.8 ;color:rgba(0, 0, 0, 0.8);margin-top: 0">
                                        Message: {{ $contact->message }}
                                    </p>
                                </td>
                            </tr>
                            </tbody>
                        </table>
                    </td>
                </tr>
                </tbody>
            </table>
        </td>
    </tr>
    </tbody>
</table>
</body>
</html>
