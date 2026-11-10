
<!DOCTYPE html>
<html lang="bg">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ново записване за събитие</title>
</head>

<body style="margin:0; padding:0; background-color:#f5f6f4; font-family:Arial, Helvetica, sans-serif; color:#333333;">

    <table role="presentation"
           cellpadding="0"
           cellspacing="0"
           border="0"
           width="100%"
           style="background-color:#f5f6f4;">

        <tr>
            <td align="center" style="padding:40px 15px;">

                <table role="presentation"
                       cellpadding="0"
                       cellspacing="0"
                       border="0"
                       width="100%"
                       style="max-width:600px; background-color:#ffffff; border-radius:12px; overflow:hidden;">

                    <!-- Header -->
                    <tr>
                        <td align="center"
                            style="background-color:#355c4d; padding:35px 25px;">

                            <h1 style="margin:0; font-size:28px; line-height:1.3; color:#ffffff; font-weight:600;">
                                Mira Therapy
                            </h1>

                            <p style="margin:10px 0 0; color:#e0ebe5; font-size:14px;">
                                Известие за ново записване
                            </p>

                        </td>
                    </tr>

                    <!-- Notification Icon -->
                    <tr>
                        <td align="center" style="padding:35px 30px 10px;">

                            <div style="width:75px; height:75px; line-height:75px; border-radius:50%; background-color:#e8f6ed; text-align:center; font-size:35px; color:#279653;">
                                &#10003;
                            </div>

                        </td>
                    </tr>

                    <!-- Title -->
                    <tr>
                        <td align="center" style="padding:10px 30px 15px;">

                            <h2 style="margin:0; color:#243c32; font-size:25px; line-height:1.4;">
                                Ново записване!
                            </h2>

                        </td>
                    </tr>

                    <!-- Greeting -->
                    <tr>
                        <td style="padding:10px 35px 25px;">

                            <p style="font-size:16px; line-height:1.8; margin:0 0 15px;">
                                Здравейте, <strong>Мирослава Мацурева</strong>!
                            </p>

                            <p style="font-size:15px; line-height:1.8; color:#555555; margin:0 0 15px;">
                                Имате ново записване за събитие през сайта на Mira Therapy.
                            </p>

                            <p style="font-size:15px; line-height:1.8; color:#555555; margin:0;">
                                Участникът <strong>{{ $booking['name'] }}</strong> успешно изпрати своята заявка за записване.
                                По-долу ще откриете подробна информация за събитието и данните за контакт.
                            </p>

                        </td>
                    </tr>

                    <!-- Event Details -->
                    <tr>
                        <td style="padding:0 35px 30px;">

                            <table role="presentation"
                                   cellpadding="0"
                                   cellspacing="0"
                                   border="0"
                                   width="100%"
                                   style="background-color:#f8faf8; border:1px solid #e4ebe6; border-radius:10px;">

                                <tr>
                                    <td colspan="2"
                                        style="padding:25px 25px 20px; border-bottom:1px solid #e4ebe6;">

                                        <p style="font-size:12px; text-transform:uppercase; letter-spacing:1px; color:#739080; margin:0 0 8px;">
                                            Информация за събитието
                                        </p>

                                        <h3 style="margin:0; color:#284c3b; font-size:22px; line-height:1.4;">
                                            {{ $event->title }}
                                        </h3>

                                    </td>
                                </tr>

                                <!-- Event Type -->
                                <tr>
                                    <td style="padding:18px 10px 10px 25px; color:#777777; font-size:14px; width:38%; vertical-align:top;">
                                        Вид събитие
                                    </td>

                                    <td style="padding:18px 25px 10px 10px; font-size:14px; font-weight:600; vertical-align:top;">
                                        {{ $event->type }}
                                    </td>
                                </tr>

                                <!-- Start Date -->
                                <tr>
                                    <td style="padding:12px 10px 10px 25px; color:#777777; font-size:14px; vertical-align:top;">
                                        Начална дата
                                    </td>

                                    <td style="padding:12px 25px 10px 10px; font-size:14px; font-weight:600; vertical-align:top;">
                                        {{ $event->starts_at->format('d.m.Y') }}
                                    </td>
                                </tr>

                                <!-- Start Time -->
                                <tr>
                                    <td style="padding:12px 10px 10px 25px; color:#777777; font-size:14px; vertical-align:top;">
                                        Начален час
                                    </td>

                                    <td style="padding:12px 25px 10px 10px; font-size:14px; font-weight:600; vertical-align:top;">
                                        {{ $event->starts_at->format('H:i') }} ч.
                                    </td>
                                </tr>

                                <!-- End Date -->
                                <tr>
                                    <td style="padding:12px 10px 10px 25px; color:#777777; font-size:14px; vertical-align:top;">
                                        Крайна дата
                                    </td>

                                    <td style="padding:12px 25px 10px 10px; font-size:14px; font-weight:600; vertical-align:top;">
                                        {{ $event->ends_at->format('d.m.Y') }}
                                    </td>
                                </tr>

                                <!-- End Time -->
                                <tr>
                                    <td style="padding:12px 10px 10px 25px; color:#777777; font-size:14px; font-weight:600; vertical-align:top;">
                                        Краен час
                                    </td>

                                    <td style="padding:12px 25px 10px 10px; font-size:14px; font-weight:600; vertical-align:top;">
                                        {{ $event->ends_at->format('H:i') }} ч.
                                    </td>
                                </tr>

                                <!-- Location -->
                                <tr>
                                    <td style="padding:12px 10px 10px 25px; color:#777777; font-size:14px; vertical-align:top;">
                                        Място
                                    </td>

                                    <td style="padding:12px 25px 10px 10px; font-size:14px; font-weight:600; vertical-align:top;">
                                        {{ $event->location }}
                                    </td>
                                </tr>

                                <!-- Host -->
                                <tr>
                                    <td style="padding:12px 10px 10px 25px; color:#777777; font-size:14px; vertical-align:top;">
                                        Водещ
                                    </td>

                                    <td style="padding:12px 25px 10px 10px; font-size:14px; font-weight:600; vertical-align:top;">
                                        {{ $event->host }}
                                    </td>
                                </tr>

                                <!-- Duration -->
                                <tr>
                                    <td style="padding:12px 10px 10px 25px; color:#777777; font-size:14px; vertical-align:top;">
                                        Продължителност
                                    </td>

                                    <td style="padding:12px 25px 10px 10px; font-size:14px; font-weight:600; vertical-align:top;">
                                        {{ $event->duration }} минути
                                    </td>
                                </tr>

                                <!-- Price -->
                                <tr>
                                    <td style="padding:12px 10px 25px 25px; color:#777777; font-size:14px; vertical-align:top;">
                                        Цена
                                    </td>

                                    <td style="padding:12px 25px 25px 10px; font-size:14px; font-weight:600; color:#284c3b; vertical-align:top;">
                                        @if ($event->price > 0)
                                            {{ number_format($event->price, 2, ',', ' ') }} €
                                        @else
                                            Безплатно
                                        @endif
                                    </td>
                                </tr>

                            </table>

                        </td>
                    </tr>

                    <!-- Booking Contact Details -->
                    <tr>
                        <td style="padding:0 35px 30px;">

                            <h3 style="font-size:18px; color:#284c3b; margin:0 0 15px;">
                                Данни за участника
                            </h3>

                            <table role="presentation"
                                   cellpadding="0"
                                   cellspacing="0"
                                   border="0"
                                   width="100%"
                                   style="background-color:#f8faf8; border:1px solid #e4ebe6; border-radius:10px;">

                                <tr>
                                    <td style="padding:20px 25px 10px; font-size:14px; line-height:1.8; color:#555555;">
                                        <strong>Име:</strong> {{ $booking['name'] }}
                                    </td>
                                </tr>

                                <tr>
                                    <td style="padding:5px 25px 10px; font-size:14px; line-height:1.8; color:#555555;">
                                        <strong>Имейл:</strong>
                                        <a href="mailto:{{ $booking['email'] }}" style="color:#355c4d; text-decoration:none;">
                                            {{ $booking['email'] }}
                                        </a>
                                    </td>
                                </tr>

                                <tr>
                                    <td style="padding:5px 25px 20px; font-size:14px; line-height:1.8; color:#555555;">
                                        <strong>Телефон:</strong>
                                        <a href="tel:{{ $booking['phone'] }}" style="color:#355c4d; text-decoration:none;">
                                            {{ $booking['phone'] }}
                                        </a>
                                    </td>
                                </tr>

                            </table>

                        </td>
                    </tr>

                    <!-- Notification -->
                    <tr>
                        <td style="padding:0 35px 35px;">

                            <table role="presentation"
                                   cellpadding="0"
                                   cellspacing="0"
                                   border="0"
                                   width="100%"
                                   style="background-color:#edf5ef; border-left:4px solid #355c4d; border-radius:6px;">

                                <tr>
                                    <td style="padding:20px;">

                                        <p style="margin:0 0 8px; font-size:15px; font-weight:600; color:#284c3b;">
                                            Информация
                                        </p>

                                        <p style="margin:0; font-size:14px; line-height:1.8; color:#4e6356;">
                                            Това е автоматично известие за ново записване.
                                            При необходимост можете да се свържете с участника,
                                            използвайки предоставените данни за контакт.
                                        </p>

                                    </td>
                                </tr>

                            </table>

                        </td>
                    </tr>

                    <!-- Closing -->
                    <tr>
                        <td style="padding:0 35px 35px;">

                            <p style="font-size:15px; line-height:1.8; color:#555555; margin:0;">
                                С уважение,<br>
                                <strong style="color:#284c3b;">Екипът на Mira Therapy</strong>
                            </p>

                        </td>
                    </tr>

                    <!-- Footer -->
                    <tr>
                        <td align="center"
                            style="background-color:#f1f5f2; padding:25px 20px; border-top:1px solid #e4ebe6;">

                            <p style="font-size:13px; line-height:1.7; color:#777777; margin:0 0 8px;">
                                Автоматично известие за ново записване за събитие.
                            </p>

                            <p style="font-size:12px; line-height:1.7; color:#999999; margin:0;">
                                © {{ date('Y') }} Mira Therapy. Всички права запазени.
                            </p>

                        </td>
                    </tr>

                </table>

            </td>
        </tr>

    </table>

</body>
</html>
