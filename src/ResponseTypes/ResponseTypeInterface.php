<?php
/**
 * OAuth 2.0 Response Type Interface
 *
 * @package     league/oauth2-server
 * @author      Alex Bilbie <hello@alexbilbie.com>
 * @copyright   Copyright (c) Alex Bilbie
 * @license     http://mit-license.org/
 * @link        https://github.com/thephpleague/oauth2-server
 */

namespace League\OAuth2\Server\ResponseTypes;

use League\OAuth2\Server\Entities\Interfaces\AccessTokenEntityInterface;
use League\OAuth2\Server\Entities\Interfaces\RefreshTokenEntityInterface;
use Psr\Http\Message\ResponseInterface;
use Psr\Http\Message\ServerRequestInterface;

interface ResponseTypeInterface
{
    /**
     * @param \League\OAuth2\Server\Entities\Interfaces\AccessTokenEntityInterface $accessToken
     */
    public function setAccessToken(AccessTokenEntityInterface $accessToken);

    /**
     * @param \League\OAuth2\Server\Entities\Interfaces\RefreshTokenEntityInterface $refreshToken
     */
    public function setRefreshToken(RefreshTokenEntityInterface $refreshToken);

    /**
     * Determine the access token in the authorization header
     *
     * @param ServerRequestInterface $request
     *
     * @return string
     */
    public function determineAccessTokenInHeader(ServerRequestInterface $request);

    /**
     * @return ResponseInterface
     */
    public function generateHttpResponse();
}
