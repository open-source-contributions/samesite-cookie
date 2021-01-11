<?php

namespace Selective\SameSiteCookie;

/**
 * SameSite Cookie Configuration.
 */
final class PhpSessionHandler implements SessionHandlerInterface
{
    /**
     * {@inheritDoc}
     */
    public function getId(): string
    {
        return (string)session_id();
    }

    /**
     * {@inheritDoc}
     */
    public function start(): void
    {
        session_start();
    }

    /**
     * {@inheritDoc}
     */
    public function getName(): ?string
    {
        return (string)session_name();
    }

    /**
     * {@inheritDoc}
     */
    public function getCookieParams(): array
    {
        return (array)session_get_cookie_params();
    }

    /**
     * {@inheritDoc}
     */
    public function isStarted(): bool
    {
        return session_status() === PHP_SESSION_ACTIVE;
    }
}
