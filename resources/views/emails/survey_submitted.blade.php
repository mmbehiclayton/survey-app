<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
  <title>Survey Submitted</title>
  <!--[if !mso]><!-->
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <!--<![endif]-->
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <style type="text/css">
    #outlook a {
      padding: 0;
    }

    .ReadMsgBody {
      width: 100%;
    }

    .ExternalClass {
      width: 100%;
    }

    .ExternalClass * {
      line-height: 100%;
    }

    body {
      margin: 0;
      padding: 0;
      -webkit-text-size-adjust: 100%;
      -ms-text-size-adjust: 100%;
      font-family: 'Open Sans', sans-serif;
      background: #E5E5E5;
    }

    table,
    td {
      border-collapse: collapse;
      mso-table-lspace: 0pt;
      mso-table-rspace: 0pt;
    }

    .container {
      width: 600px;
      margin: auto;
    }

    .button {
      background: #22D172;
      color: #fff;
      text-decoration: none;
      display: inline-block;
      padding: 10px 20px;
      border-radius: 7px;
    }

    @media only screen and (max-width:595px) {
      .container {
        width: 100% !important;
      }
    }
  </style>
</head>

<body>
  <table width="100%" cellspacing="0" cellpadding="0" border="0" align="center" bgcolor="#F6FAFB">
    <tbody>
      <tr>
        <td valign="top" align="center">
          <table class="container" width="600" cellspacing="0" cellpadding="0" border="0">
            <tbody>
              <tr>
                <td style="padding:48px 0 30px 0; text-align: center; font-size: 14px; color: #4C83EE;">
                  Diaspora Legal Support Survey Submission
                </td>
              </tr>
              <tr>
                <td class="main-content" style="padding: 48px 30px 40px; color: #000000;" bgcolor="#ffffff">
                  <table width="100%" cellspacing="0" cellpadding="0" border="0">
                    <tbody>
                      <tr>
                        <td style="padding: 0 0 24px 0; font-size: 18px; line-height: 150%; font-weight: bold; color: #000000; letter-spacing: 0.01em;">
                          Update: New Diaspora Legal Support Submission
                        </td>
                      </tr>
                      <tr>
                        <td style="padding: 0 0 10px 0; font-size: 14px; line-height: 150%; color: #000000;">
                          <p><strong>Name:</strong> {{ $survey->name }}</p>
                          <p><strong>Email:</strong> {{ $survey->email }}</p>
                          <p><strong>Country:</strong> {{ $survey->country }}</p>
                          <p><strong>Assistance Required:</strong> {{ $survey->assistance }}</p>
                          <p><strong>Legal Case Number:</strong> {{ $survey->case_number }}</p>
                        </td>
                      </tr>
                      @if ($survey->documents)
                      <tr>
                        <td style="padding: 0 0 16px 0; font-size: 14px; line-height: 150%; color: #000000;">
                          <p><strong>Documents:</strong></p>
                          <ul>
                            @foreach ($survey->documents as $document)
                            <li><a href="{{ asset('storage/documents/' . basename($document)) }}" style="color: #4C83EE;">{{ basename($document) }}</a></li>
                            @endforeach
                          </ul>
                        </td>
                      </tr>
                      @endif
                      <tr>
                        <td style="padding: 0 0 60px 0; font-size: 14px; line-height: 150%; color: #000000;">
                          This Survey was Submitted from Diaspora Legal Support Survey Form. Check <a href="www.diasporasupport.co.ke" style="color: #4C83EE;">For More Information</a>.
                        </td>
                      </tr>
                      <tr>
                        <td style="padding: 0 0 16px;">
                          <span style="display: block; width: 117px; border-bottom: 1px solid #8B949F;"></span>
                        </td>
                      </tr>
                      <tr>
                        <td style="font-size: 14px; line-height: 170%; color: #000000;">
                          Best regards, <br><strong>Diaspora Legal Support</strong>
                        </td>
                      </tr>
                    </tbody>
                  </table>
                </td>
              </tr>
              <tr>
                <td style="padding: 24px 0 48px; font-size: 0px;">
                  <div class="outlook-group-fix" style="padding: 0 0 20px 0; vertical-align: top; display: inline-block; text-align: center; width:100%;">
                    <span style="padding: 0; font-size: 11px; line-height: 15px; color: #8B949F;">Diaspora Legal Support<br/>Nairobi, Kenya</span>
                  </div>
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
