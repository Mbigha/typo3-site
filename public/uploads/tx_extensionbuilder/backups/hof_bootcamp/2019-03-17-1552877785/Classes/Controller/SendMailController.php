<?php
namespace HofBootCamp\HofBootcamp\Controller;


/***
 *
 * This file is part of the "Hof Typo3 Bootcamp" Extension for TYPO3 CMS.
 *
 * For the full copyright and license information, please read the
 * LICENSE.txt file that was distributed with this source code.
 *
 *  (c) 2019 
 *
 ***/
/**
 * SendMailController
 */
class SendMailController extends \TYPO3\CMS\Extbase\Mvc\Controller\ActionController
{

    /**
     * action send mail
     * 
     * @return response to AJAX request
     */
    public function sendAction()
    {
        $data = $_POST;
        $email = $data['email'];
        $name = $data['name'];
        
        $mail = \TYPO3\CMS\Core\Utility\GeneralUtility::makeInstance(\TYPO3\CMS\Core\Mail\MailMessage::class);
        $mail->setSubject( $data['subject'] );
        $mail->setFrom(array($email => $name));
        $mail->setTo(array('sigalambigha@gmail.com'));
        $mail->setBody( $data['message'], 'text/html' );
        
        if ( $mail->send() ) {
            $msg = 'OK';
        } else {
            $msg = 'Email not sent';
        }
        return $msg;
    }
}
