<?php

namespace App;

class Response
{
    const HTTP_SUCCESS = 200;
    const HTTP_SUCCESS_POST = 201;
    const HTTP_SUCCESS_NO_RETURN = 204;
    const HTTP_FORBIDDEN = 403;
    const HTTP_NOT_FOUND = 404;
    const HTTP_CONFLICT = 409;
    const HTTP_NOT_PROCESSABLE = 422;
    const HTTP_UNAUTHORIZED = 401;

    const SUCCESS = 'Success';
    const FAIL = 'Failure';

    const TRUE = 1;
    const FALSE = 0;

    const SUPER_ADMIN = 0;
    const ADMIN = 1;
    const USER = 2;

    const MALE = 1;
    const FEMALE = 2;
    const MALE_STRING = "MALE";
    const FEMALE_STRING = "FEMALE";

    const IS_REQUIRED = 'is required';
    const IS_A_STRING = 'must be a string';
    const IS_A_NUMBER = 'must be a number';
    const IS_AN_EMAIL = 'must be an email';

    const INVALID_CREDENTIAL = 'Invalid Credentials';
    const INVALID_EMAIL = 'Email already exists';
    const SUCCESSFULLY_LOGGED_IN = 'Successfully Logged In';
    const SUCCESSFULLY_REGISTERED_USER = 'Successfully Registered User';
    const INCORRECT_LOGIN_INPUT = 'Please input email';
    const USER_NOT_FOUND = 'User not found';
    const SUCCESSFULLY_GET_ALL_USERS = 'Successfully get all users';
    const SUCCESSFULLY_GET_USER = 'Successfully get all user';

    const SUCCESSFULLY_GET_ALL_STUDENTS = 'Successfully get all students';
    const SUCCESSFULLY_GET_STUDENT = 'Successfully get student';
    const SUCCESSFULLY_CREATED_STUDENT = 'Successfully created student';
    const SUCCESSFULLY_UPDATED_STUDENT = 'Successfully updated student';
    const SUCCESSFULLY_DELETED_STUDENT = 'Successfully deleted student';
    const SUCCESSFULLY_UNDELETED_STUDENT = 'Successfully undeleted student';
    const SUCCESSFULLY_UPDATED_MULTIPLE_STUDENTS = 'Successfully updated multiple students';
    const SUCCESSFULLY_CREATED_MULTIPLE_DUPLICATED_STUDENTS = 'Successfully created multiple duplicated students';

    const SUCCESSFULLY_GET_ALL_PAYROLLS = 'Successfully get all payrolls';
    const SUCCESSFULLY_GET_PAYROLL = 'Successfully get payroll';
    const SUCCESSFULLY_CREATED_PAYROLL = 'Successfully created payroll';
    const SUCCESSFULLY_UPDATED_PAYROLL = 'Successfully updated payroll';
    const SUCCESSFULLY_DELETED_PAYROLL = 'Successfully deleted payroll';
    const SUCCESSFULLY_CREATED_MULTIPLE_PAYROLLS = 'Successfully created multiple payrolls';
    const SUCCESSFULLY_UPDATED_MULTIPLE_PAYROLLS = 'Successfully updated multiple payrolls';

    const SUCCESSFULLY_GET_ALL_SCHOLARSHIPS = 'Successfully get all scholarships';
    const SUCCESSFULLY_GET_SCHOLARSHIP = 'Successfully get scholarship';
    const SUCCESSFULLY_CREATED_SCHOLARSHIP = 'Successfully created scholarship';
    const SUCCESSFULLY_UPDATED_SCHOLARSHIP = 'Successfully updated scholarship';
    const SUCCESSFULLY_DELETED_SCHOLARSHIP = 'Successfully deleted scholarship';

    const SUCCESSFULLY_GET_ALL_SCHOLARSHIP_AWARD_CONTROLS = 'Successfully get all scholarship award controls';
    const SUCCESSFULLY_GET_SCHOLARSHIP_AWARD_CONTROL = 'Successfully get scholarship award control';
    const SUCCESSFULLY_CREATED_SCHOLARSHIP_AWARD_CONTROL = 'Successfully created scholarship award control';
    const SUCCESSFULLY_UPDATED_SCHOLARSHIP_AWARD_CONTROL = 'Successfully updated scholarship award control';
    const SUCCESSFULLY_DELETED_SCHOLARSHIP_AWARD_CONTROL = 'Successfully deleted scholarship award control';
    const SUCCESSFULLY_CREATED_SCHOLARSHIP_AWARD_CONTROLS = 'Successfully created multiple scholarship award control';

    const SUCCESSFULLY_GET_ALL_SMS = 'Successfully get all sms';
    const SUCCESSFULLY_GET_SMS = 'Successfully get sms';
    const SUCCESSFULLY_CREATED_SMS = 'Successfully created sms';
    const SUCCESSFULLY_UPDATED_SMS = 'Successfully updated sms';
    const SUCCESSFULLY_DELETED_SMS = 'Successfully deleted sms';
}