<?php

namespace leealex\telegram\types;

/**
 * This object represents one special entity in a text message. For example, hashtags, usernames, URLs, etc.
 *
 * @see https://core.telegram.org/bots/api#messageentity
 * @package leealex\telegram\types
 */
class MessageEntity extends BaseType
{
    const TYPE_MENTION = 'mention';
    const TYPE_HASHTAG = 'hashtag';
    const TYPE_CASHTAG = 'cashtag';
    const TYPE_BOT_COMMAND = 'bot_command';
    const TYPE_URL = 'url';
    const TYPE_EMAIL = 'email';
    const TYPE_PHONE_number = 'phone_number';
    const TYPE_BOLD = 'bold';
    const TYPE_ITALIC = 'italic';
    const TYPE_UNDERLINE = 'underline';
    const TYPE_STRIKETHROUGH = 'strikethrough';
    const TYPE_CODE = 'code';
    const TYPE_PRE = 'pre';
    const TYPE_TEXT_LINK = 'text_link';
    const TYPE_TEXT_MENTION = 'text_mention';

    /**
     * Type of the entity. Can be “mention” (@username), “hashtag” (#hashtag), “cashtag” ($USD),
     * “bot_command” (/start@jobs_bot), “url” (https://telegram.org), “email” (do-not-reply@telegram.org),
     * “phone_number” (+1-212-555-0123), “bold” (bold text), “italic” (italic text), “underline” (underlined text),
     * “strikethrough” (strikethrough text), “code” (monowidth string), “pre” (monowidth block),
     * “text_link” (for clickable text URLs), “text_mention” (for users without usernames)
     * @var string
     */
    public $type;
    /**
     * Offset in UTF-16 code units to the start of the entity
     * @var integer
     */
    public $offset;
    /**
     * Length of the entity in UTF-16 code units
     * @var integer
     */
    public $length;
    /**
     * Optional. For “text_link” only, url that will be opened after user taps on the text
     * @var string
     */
    public $url;
    /**
     * Optional. For “text_mention” only, the mentioned user
     * @var User
     */
    public $user;
    /**
     * Optional. For “pre” only, the programming language of the entity text
     * @var string
     */
    public $language;
}