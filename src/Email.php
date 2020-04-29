<?php
/**
 * @file Employee.php
 * @author Babas
 * @version 1.1
 */
/**
 * @class Email Email.php
 */
final class Email
{
    /**
     * @attribut string $email email de l'employé
     */
    private $email;

    /**
     * Employee constructor.
     * @param $email string
     */
    private function __construct(string $email)
    {
        $this->ensureIsValidEmail($email);

        $this->email = $email;
    }

    public static function fromString(string $email): self
    {
        return new self($email);
    }

    public function __toString(): string
    {
        return $this->email;
    }

    private function ensureIsValidEmail(string $email): void
    {
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            throw new InvalidArgumentException(
                sprintf(
                    '"%s" is not a valid email address',
                    $email
                )
            );
        }
    }
}