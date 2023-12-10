<?php

function getHotelInitials($hotelName) {
    $words = explode(' ', $hotelName);
    $initials = '';
    foreach ($words as $word) {
        $initials .= strtoupper(substr($word, 0, 1));
    }
    return $initials;
}


function getInvoiceNumber($guest) {
    $hotelInitials = getHotelInitials(Auth::user()->business_name);
    $currentYear = date('Y');
    $customerId = $guest->id;
    $formattedCustomerId = sprintf('%04d', $customerId);
    $invoiceNumber = $hotelInitials."-".$currentYear."-".$formattedCustomerId;
    return $invoiceNumber;
}


function getStayPrice($guest) {
    $roomPrice = $guest->reservations->room->price;
    $checkIn = new DateTime($guest->reservations->check_in);
    $checkOut = new DateTime($guest->reservations->check_out);
    $stayDuration = $checkOut->diff($checkIn)->days;
    $totalStayAmount = $roomPrice * $stayDuration;
    return $totalStayAmount;
}

?>