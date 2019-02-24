<?php

function getUsersList()
{
    return [
        'Демьян Варфоломеевич' => 'BD2EA61B385E5034DD46A8B4C320459652DA7438512802C780E4BD0F0902A2C9',
        'Глаша' => '29674F2387F91CA7CF06EF10F42579E3BA289C62F46DBA6A7EDCDFD27F4E889E',
        'Афанасий' => '675AADA27E7D9C7FE7EA48C5DED6B89513BFD18644D3552B06930B1D2097D741',
        '_nightmare666_' => '9D38F055BC3A493B89E58B3907E8752FA9F53ACB750C3429D0770DE7B9B83671',
        'Пантелеимон' => '488D19428607D30B9CE650C858D0B370308298C7FFC463E80D6F279B78A28308',
        'Купава' => 'FCAE0D0492FDC7EDB34691626487F5F808EDDDFAEA01B46330EC76B7C1ABC8EC',
        'ule4ka777' => '8D969EEF6ECAD3C29A3A629280E686CF0C3F5D5A86AFF3CA12020C923ADC6C92',
        'Кузьма' => 'A795175FD0362310E3FC9B610A26D6A3ACC7904BDC52ED2B9511BE34F7A2A4A8',
        '-=МяТнаЯ КоНфЕтКа=-' => '65E84BE33532FB784C48129675F9EFF3A682B27168C0EA744B2CF58EE02337C5',
        'Доброжир Всеволодович' => '80D66C2F3008D64C829EADA5110853D25E84112AFD42E1611484A78C9EE22E36',
        'John Doe' => '2F183A4E64493AF3F377F745EDA502363CD3E7EF6E4D266D444758DE0A85FCC8',
        'Иннокентий Шниперсон' => 'D5F69E77CAF0336421C8C86D679B41B8D8F778C9D31FAB2A9C49E1997689FE87'
    ];
}

function existsUser($login)
{
    return array_key_exists($login, getUsersList());
}

function checkPassword($login, $password)
{
    if (true != existsUser($login)) {
        return false;
    } else {
        $usersArray = getUsersList();
        $savedPasswordHash = strtolower($usersArray[$login]);
        $enteredPasswordHash = hash('sha256', $password);
        if ($enteredPasswordHash !== $savedPasswordHash) {
            return false;
        } else {
            return true;
        }
    }
}