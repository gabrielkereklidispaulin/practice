<?php
interface PaymentProcessor
{
    public function processPayment($amount);
}

class PaypalProcessor implements PaymentProcessor
{
    public function processPayment($amount)
    {
        echo "Bearbetar betalning via Paypal: $amount";
    }
}
class StripeProcessor implements PaymentProcessor
{
    public function processPayment($amount)
    {
        echo "Bearbetar betalning via Stripe: $amount";
    }
}

class SwishProcessor implements PaymentProcessor
{
    public function processPayment($amount)
    {
        echo "Bearbetar betalning via Swish: $amount";
    }
}

class PaymentService
{
    private $processor;
    public function __construct(PaymentProcessor $processor)
    {
        $this->processor = $processor;
    }
    public function handlePayment($amount)
    {
        $this->processor->processPayment($amount);
    }
}

if ($paymentMethod == 'stripe') {
    $processor = new StripeProcessor();
} elseif ($paymentMethod === 'paypal') {
    $processor = new PaypalProcessor();
}

// Skapa ett objekt av klassen StripeProcessor
$processor = new StripeProcessor();

// Skapa ett objekt av klassen SwishProcessor
$processor = new SwishProcessor();

// Skicka det som dependency till PaymentService
$paymentService = new PaymentService($processor);

$paymentService->handlePayment(100);

