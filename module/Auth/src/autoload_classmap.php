<?php
// Generated by ZF2's ./bin/classmap_generator.php
return array(
    'Acl\Assertion\AbstractEventManagerAwareAssertion'              => __DIR__ . '/Acl/Assertion/AbstractEventManagerAwareAssertion.php',
    'Acl\Assertion\AssertionEvent'                                  => __DIR__ . '/Acl/Assertion/AssertionEvent.php',
    'Acl\Assertion\AssertionManager'                                => __DIR__ . '/Acl/Assertion/AssertionManager.php',
    'Acl\Assertion\AssertionManagerFactory'                         => __DIR__ . '/Acl/Assertion/AssertionManagerFactory.php',
    'Acl\Config'                                                    => __DIR__ . '/Acl/Config.php',
    'Acl\Controller\Plugin\Acl'                                     => __DIR__ . '/Acl/Controller/Plugin/Acl.php',
    'Acl\Controller\Plugin\AclFactory'                              => __DIR__ . '/Acl/Controller/Plugin/AclFactory.php',
    'Acl\Factory\Service\AclFactory'                                => __DIR__ . '/Acl/Factory/Service/AclFactory.php',
    'Acl\Factory\View\Helper\AclFactory'                            => __DIR__ . '/Acl/Factory/View/Helper/AclFactory.php',
    'Acl\Listener\CheckPermissionsListener'                         => __DIR__ . '/Acl/Listener/CheckPermissionsListener.php',
    'Acl\Listener\CheckPermissionsListenerFactory'                  => __DIR__ . '/Acl/Listener/CheckPermissionsListenerFactory.php',
    'Acl\Service\Acl'                                               => __DIR__ . '/Acl/Service/Acl.php',
    'Acl\View\Helper\Acl'                                           => __DIR__ . '/Acl/View/Helper/Acl.php',
    'Auth\Adapter\ExternalApplication'                              => __DIR__ . '/Auth/Adapter/ExternalApplication.php',
    'Auth\Adapter\HybridAuth'                                       => __DIR__ . '/Auth/Adapter/HybridAuth.php',
    'Auth\Adapter\User'                                             => __DIR__ . '/Auth/Adapter/User.php',
    'Auth\AuthenticationService'                                    => __DIR__ . '/Auth/AuthenticationService.php',
    'Auth\Controller\ForgotPasswordController'                      => __DIR__ . '/Auth/Controller/ForgotPasswordController.php',
    'Auth\Controller\GotoResetPasswordController'                   => __DIR__ . '/Auth/Controller/GotoResetPasswordController.php',
    'Auth\Controller\HybridAuthController'                          => __DIR__ . '/Auth/Controller/HybridAuthController.php',
    'Auth\Controller\IndexController'                               => __DIR__ . '/Auth/Controller/IndexController.php',
    'Auth\Controller\ManageController'                              => __DIR__ . '/Auth/Controller/ManageController.php',
    'Auth\Controller\ManageGroupsController'                        => __DIR__ . '/Auth/Controller/ManageGroupsController.php',
    'Auth\Controller\PasswordController'                            => __DIR__ . '/Auth/Controller/PasswordController.php',
    'Auth\Controller\Plugin\Auth'                                   => __DIR__ . '/Auth/Controller/Plugin/Auth.php',
    'Auth\Controller\Plugin\LoginFilter'                            => __DIR__ . '/Auth/Controller/Plugin/LoginFilter.php',
    'Auth\Controller\Plugin\OAuth'                                  => __DIR__ . '/Auth/Controller/Plugin/OAuth.php',
    'Auth\Controller\Plugin\Service\SocialProfilesFactory'          => __DIR__ . '/Auth/Controller/Plugin/Service/SocialProfilesFactory.php',
    'Auth\Controller\Plugin\SocialProfiles'                         => __DIR__ . '/Auth/Controller/Plugin/SocialProfiles.php',
    'Auth\Controller\Plugin\SocialProfiles\AbstractAdapter'         => __DIR__ . '/Auth/Controller/Plugin/SocialProfiles/AbstractAdapter.php',
    'Auth\Controller\Plugin\SocialProfiles\Facebook'                => __DIR__ . '/Auth/Controller/Plugin/SocialProfiles/Facebook.php',
    'Auth\Controller\Plugin\SocialProfiles\LinkedIn'                => __DIR__ . '/Auth/Controller/Plugin/SocialProfiles/LinkedIn.php',
    'Auth\Controller\Plugin\SocialProfiles\Xing'                    => __DIR__ . '/Auth/Controller/Plugin/SocialProfiles/Xing.php',
    'Auth\Controller\Plugin\UserSwitcher'                           => __DIR__ . '/Auth/Controller/Plugin/UserSwitcher.php',
    'Auth\Controller\RegisterConfirmationController'                => __DIR__ . '/Auth/Controller/RegisterConfirmationController.php',
    'Auth\Controller\RegisterController'                            => __DIR__ . '/Auth/Controller/RegisterController.php',
    'Auth\Controller\RemoveController'                              => __DIR__ . '/Auth/Controller/RemoveController.php',
    'Auth\Controller\SocialProfilesController'                      => __DIR__ . '/Auth/Controller/SocialProfilesController.php',
    'Auth\Controller\UsersController'                               => __DIR__ . '/Auth/Controller/UsersController.php',
    'Auth\Dependency\ListInterface'                                 => __DIR__ . '/Auth/Dependency/ListInterface.php',
    'Auth\Dependency\ListItem'                                      => __DIR__ . '/Auth/Dependency/ListItem.php',
    'Auth\Dependency\Manager'                                       => __DIR__ . '/Auth/Dependency/Manager.php',
    'Auth\Entity\AnonymousUser'                                     => __DIR__ . '/Auth/Entity/AnonymousUser.php',
    'Auth\Entity\AuthSession'                                       => __DIR__ . '/Auth/Entity/AuthSession.php',
    'Auth\Entity\Filter\CredentialFilter'                           => __DIR__ . '/Auth/Entity/Filter/CredentialFilter.php',
    'Auth\Entity\Filter\UserToSearchResult'                         => __DIR__ . '/Auth/Entity/Filter/UserToSearchResult.php',
    'Auth\Entity\Group'                                             => __DIR__ . '/Auth/Entity/Group.php',
    'Auth\Entity\GroupInterface'                                    => __DIR__ . '/Auth/Entity/GroupInterface.php',
    'Auth\Entity\Info'                                              => __DIR__ . '/Auth/Entity/Info.php',
    'Auth\Entity\InfoInterface'                                     => __DIR__ . '/Auth/Entity/InfoInterface.php',
    'Auth\Entity\SocialProfiles\AbstractProfile'                    => __DIR__ . '/Auth/Entity/SocialProfiles/AbstractProfile.php',
    'Auth\Entity\SocialProfiles\Facebook'                           => __DIR__ . '/Auth/Entity/SocialProfiles/Facebook.php',
    'Auth\Entity\SocialProfiles\LinkedIn'                           => __DIR__ . '/Auth/Entity/SocialProfiles/LinkedIn.php',
    'Auth\Entity\SocialProfiles\ProfileInterface'                   => __DIR__ . '/Auth/Entity/SocialProfiles/ProfileInterface.php',
    'Auth\Entity\SocialProfiles\Xing'                               => __DIR__ . '/Auth/Entity/SocialProfiles/Xing.php',
    'Auth\Entity\Status'                                            => __DIR__ . '/Auth/Entity/Status.php',
    'Auth\Entity\Token'                                             => __DIR__ . '/Auth/Entity/Token.php',
    'Auth\Entity\User'                                              => __DIR__ . '/Auth/Entity/User.php',
    'Auth\Entity\UserImage'                                         => __DIR__ . '/Auth/Entity/UserImage.php',
    'Auth\Entity\UserInterface'                                     => __DIR__ . '/Auth/Entity/UserInterface.php',
    'Auth\Exception\ExceptionInterface'                             => __DIR__ . '/Auth/Exception/ExceptionInterface.php',
    'Auth\Exception\UnauthorizedAccessException'                    => __DIR__ . '/Auth/Exception/UnauthorizedAccessException.php',
    'Auth\Exception\UnauthorizedImageAccessException'               => __DIR__ . '/Auth/Exception/UnauthorizedImageAccessException.php',
    'Auth\Exception\UserDeactivatedException'                       => __DIR__ . '/Auth/Exception/UserDeactivatedException.php',
    'Auth\Factory\Adapter\ExternalApplicationAdapterFactory'        => __DIR__ . '/Auth/Factory/Adapter/ExternalApplicationAdapterFactory.php',
    'Auth\Factory\Adapter\HybridAuthAdapterFactory'                 => __DIR__ . '/Auth/Factory/Adapter/HybridAuthAdapterFactory.php',
    'Auth\Factory\Adapter\UserAdapterFactory'                       => __DIR__ . '/Auth/Factory/Adapter/UserAdapterFactory.php',
    'Auth\Factory\Controller\ForgotPasswordControllerFactory'       => __DIR__ . '/Auth/Factory/Controller/ForgotPasswordControllerFactory.php',
    'Auth\Factory\Controller\GotoResetPasswordControllerFactory'    => __DIR__ . '/Auth/Factory/Controller/GotoResetPasswordControllerFactory.php',
    'Auth\Factory\Controller\IndexControllerFactory'                => __DIR__ . '/Auth/Factory/Controller/IndexControllerFactory.php',
    'Auth\Factory\Controller\PasswordControllerFactory'             => __DIR__ . '/Auth/Factory/Controller/PasswordControllerFactory.php',
    'Auth\Factory\Controller\Plugin\UserSwitcherFactory'            => __DIR__ . '/Auth/Factory/Controller/Plugin/UserSwitcherFactory.php',
    'Auth\Factory\Controller\RegisterConfirmationControllerFactory' => __DIR__ . '/Auth/Factory/Controller/RegisterConfirmationControllerFactory.php',
    'Auth\Factory\Controller\RegisterControllerFactory'             => __DIR__ . '/Auth/Factory/Controller/RegisterControllerFactory.php',
    'Auth\Factory\Controller\RemoveControllerFactory'               => __DIR__ . '/Auth/Factory/Controller/RemoveControllerFactory.php',
    'Auth\Factory\Controller\UsersControllerFactory'                => __DIR__ . '/Auth/Factory/Controller/UsersControllerFactory.php',
    'Auth\Factory\Dependency\ManagerFactory'                        => __DIR__ . '/Auth/Factory/Dependency/ManagerFactory.php',
    'Auth\Factory\Form\ForgotPasswordFactory'                       => __DIR__ . '/Auth/Factory/Form/ForgotPasswordFactory.php',
    'Auth\Factory\Form\LoginFactory'                                => __DIR__ . '/Auth/Factory/Form/LoginFactory.php',
    'Auth\Factory\Form\RegisterFactory'                             => __DIR__ . '/Auth/Factory/Form/RegisterFactory.php',
    'Auth\Factory\Form\RoleSelectFactory'                           => __DIR__ . '/Auth/Factory/Form/RoleSelectFactory.php',
    'Auth\Factory\Form\SocialProfilesFieldsetFactory'               => __DIR__ . '/Auth/Factory/Form/SocialProfilesFieldsetFactory.php',
    'Auth\Factory\Form\UserInfoFieldsetFactory'                     => __DIR__ . '/Auth/Factory/Form/UserInfoFieldsetFactory.php',
    'Auth\Factory\Form\UserStatusFieldsetFactory'                   => __DIR__ . '/Auth/Factory/Form/UserStatusFieldsetFactory.php',
    'Auth\Factory\Listener\ExceptionStrategyFactory'                => __DIR__ . '/Auth/Factory/Listener/ExceptionStrategyFactory.php',
    'Auth\Factory\Listener\MailForgotPasswordFactory'               => __DIR__ . '/Auth/Factory/Listener/MailForgotPasswordFactory.php',
    'Auth\Factory\Listener\SendRegistrationNotificationsFactory'    => __DIR__ . '/Auth/Factory/Listener/SendRegistrationNotificationsFactory.php',
    'Auth\Factory\ModuleOptionsFactory'                             => __DIR__ . '/Auth/Factory/ModuleOptionsFactory.php',
    'Auth\Factory\Service\AuthenticationServiceFactory'             => __DIR__ . '/Auth/Factory/Service/AuthenticationServiceFactory.php',
    'Auth\Factory\Service\ForgotPasswordFactory'                    => __DIR__ . '/Auth/Factory/Service/ForgotPasswordFactory.php',
    'Auth\Factory\Service\GotoResetPasswordFactory'                 => __DIR__ . '/Auth/Factory/Service/GotoResetPasswordFactory.php',
    'Auth\Factory\Service\HybridAuthFactory'                        => __DIR__ . '/Auth/Factory/Service/HybridAuthFactory.php',
    'Auth\Factory\Service\RegisterConfirmationFactory'              => __DIR__ . '/Auth/Factory/Service/RegisterConfirmationFactory.php',
    'Auth\Factory\Service\RegisterFactory'                          => __DIR__ . '/Auth/Factory/Service/RegisterFactory.php',
    'Auth\Factory\Service\UserUniqueTokenGeneratorFactory'          => __DIR__ . '/Auth/Factory/Service/UserUniqueTokenGeneratorFactory.php',
    'Auth\Factory\View\Helper\AuthFactory'                          => __DIR__ . '/Auth/Factory/View/Helper/AuthFactory.php',
    'Auth\Filter\LoginFilter'                                       => __DIR__ . '/Auth/Filter/LoginFilter.php',
    'Auth\Filter\StripQueryParams'                                  => __DIR__ . '/Auth/Filter/StripQueryParams.php',
    'Auth\Form\Element\SocialProfilesButton'                        => __DIR__ . '/Auth/Form/Element/SocialProfilesButton.php',
    'Auth\Form\ForgotPassword'                                      => __DIR__ . '/Auth/Form/ForgotPassword.php',
    'Auth\Form\ForgotPasswordInputFilter'                           => __DIR__ . '/Auth/Form/ForgotPasswordInputFilter.php',
    'Auth\Form\Group'                                               => __DIR__ . '/Auth/Form/Group.php',
    'Auth\Form\GroupFieldset'                                       => __DIR__ . '/Auth/Form/GroupFieldset.php',
    'Auth\Form\GroupUsersCollection'                                => __DIR__ . '/Auth/Form/GroupUsersCollection.php',
    'Auth\Form\Hydrator\SocialProfilesHydrator'                     => __DIR__ . '/Auth/Form/Hydrator/SocialProfilesHydrator.php',
    'Auth\Form\Hydrator\UserPasswordFieldsetHydrator'               => __DIR__ . '/Auth/Form/Hydrator/UserPasswordFieldsetHydrator.php',
    'Auth\Form\Hydrator\UserPasswordHydrator'                       => __DIR__ . '/Auth/Form/Hydrator/UserPasswordHydrator.php',
    'Auth\Form\Login'                                               => __DIR__ . '/Auth/Form/Login.php',
    'Auth\Form\LoginInputFilter'                                    => __DIR__ . '/Auth/Form/LoginInputFilter.php',
    'Auth\Form\Register'                                            => __DIR__ . '/Auth/Form/Register.php',
    'Auth\Form\RegisterInputFilter'                                 => __DIR__ . '/Auth/Form/RegisterInputFilter.php',
    'Auth\Form\SocialProfiles'                                      => __DIR__ . '/Auth/Form/SocialProfiles.php',
    'Auth\Form\SocialProfilesFieldset'                              => __DIR__ . '/Auth/Form/SocialProfilesFieldset.php',
    'Auth\Form\UserBase'                                            => __DIR__ . '/Auth/Form/UserBase.php',
    'Auth\Form\UserBaseFieldset'                                    => __DIR__ . '/Auth/Form/UserBaseFieldset.php',
    'Auth\Form\UserImageFactory'                                    => __DIR__ . '/Auth/Form/UserImageFactory.php',
    'Auth\Form\UserInfo'                                            => __DIR__ . '/Auth/Form/UserInfo.php',
    'Auth\Form\UserInfoContainer'                                   => __DIR__ . '/Auth/Form/UserInfoContainer.php',
    'Auth\Form\UserInfoFieldset'                                    => __DIR__ . '/Auth/Form/UserInfoFieldset.php',
    'Auth\Form\UserPassword'                                        => __DIR__ . '/Auth/Form/UserPassword.php',
    'Auth\Form\UserPasswordFieldset'                                => __DIR__ . '/Auth/Form/UserPasswordFieldset.php',
    'Auth\Form\UserProfileContainer'                                => __DIR__ . '/Auth/Form/UserProfileContainer.php',
    'Auth\Form\UserStatus'                                          => __DIR__ . '/Auth/Form/UserStatus.php',
    'Auth\Form\UserStatusContainer'                                 => __DIR__ . '/Auth/Form/UserStatusContainer.php',
    'Auth\Form\UserStatusFieldset'                                  => __DIR__ . '/Auth/Form/UserStatusFieldset.php',
    'Auth\Form\Validator\UniqueGroupName'                           => __DIR__ . '/Auth/Form/Validator/UniqueGroupName.php',
    'Auth\Form\Validator\UniqueGroupNameFactory'                    => __DIR__ . '/Auth/Form/Validator/UniqueGroupNameFactory.php',
    'Auth\Listener\DeactivatedUserListener'                         => __DIR__ . '/Auth/Listener/DeactivatedUserListener.php',
    'Auth\Listener\Events\AuthEvent'                                => __DIR__ . '/Auth/Listener/Events/AuthEvent.php',
    'Auth\Listener\MailForgotPassword'                              => __DIR__ . '/Auth/Listener/MailForgotPassword.php',
    'Auth\Listener\SendRegistrationNotifications'                   => __DIR__ . '/Auth/Listener/SendRegistrationNotifications.php',
    'Auth\Listener\SocialProfilesUnconfiguredErrorListener'         => __DIR__ . '/Auth/Listener/SocialProfilesUnconfiguredErrorListener.php',
    'Auth\Listener\TokenListener'                                   => __DIR__ . '/Auth/Listener/TokenListener.php',
    'Auth\Listener\UnauthorizedAccessListener'                      => __DIR__ . '/Auth/Listener/UnauthorizedAccessListener.php',
    'Auth\Options\CaptchaOptions'                                   => __DIR__ . '/Auth/Options/CaptchaOptions.php',
    'Auth\Options\ModuleOptions'                                    => __DIR__ . '/Auth/Options/ModuleOptions.php',
    'Auth\Repository\Filter\PaginationSearchUsers'                  => __DIR__ . '/Auth/Repository/Filter/PaginationSearchUsers.php',
    'Auth\Repository\User'                                          => __DIR__ . '/Auth/Repository/User.php',
    'Auth\Service\Exception\TokenExpirationDateExpiredException'    => __DIR__ . '/Auth/Service/Exception/TokenExpirationDateExpiredException.php',
    'Auth\Service\Exception\UserAlreadyExistsException'             => __DIR__ . '/Auth/Service/Exception/UserAlreadyExistsException.php',
    'Auth\Service\Exception\UserDoesNotHaveAnEmailException'        => __DIR__ . '/Auth/Service/Exception/UserDoesNotHaveAnEmailException.php',
    'Auth\Service\Exception\UserNotFoundException'                  => __DIR__ . '/Auth/Service/Exception/UserNotFoundException.php',
    'Auth\Service\ForgotPassword'                                   => __DIR__ . '/Auth/Service/ForgotPassword.php',
    'Auth\Service\GotoResetPassword'                                => __DIR__ . '/Auth/Service/GotoResetPassword.php',
    'Auth\Service\Register'                                         => __DIR__ . '/Auth/Service/Register.php',
    'Auth\Service\RegisterConfirmation'                             => __DIR__ . '/Auth/Service/RegisterConfirmation.php',
    'Auth\Service\UserUniqueTokenGenerator'                         => __DIR__ . '/Auth/Service/UserUniqueTokenGenerator.php',
    'Auth\View\Helper\Auth'                                         => __DIR__ . '/Auth/View/Helper/Auth.php',
    'Auth\View\Helper\BuildReferer'                                 => __DIR__ . '/Auth/View/Helper/BuildReferer.php',
    'Auth\View\Helper\LoginInfo'                                    => __DIR__ . '/Auth/View/Helper/LoginInfo.php',
    'Auth\View\Helper\StripQueryParams'                             => __DIR__ . '/Auth/View/Helper/StripQueryParams.php',
    'Auth\View\InjectLoginInfoListener'                             => __DIR__ . '/Auth/View/InjectLoginInfoListener.php',
);
