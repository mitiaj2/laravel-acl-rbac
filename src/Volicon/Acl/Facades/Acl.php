<?php namespace Volicon\Acl\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * Description of Acl
 *
 * @author nadav.v
 * 
 * @method bool check(string $resource, array $ids = [])
 * @method array filter(string $resource, array $ids = [])
 * @method undefined registerRoleProvider(int $role_type, \Volicon\Acl\RoleProviders\AclRoleProvider $roleProvider)
 * @method bool getPermission(string $resource, array $ids = [])
 * @method undefined reguard()
 * @method undefined unguard()
 * @method bool isGuard()
 * @method mix runUnguardCallback(\Closure $closure) run function without ACL restictions.
 * @method \Volicon\Acl\RoleProviders\AclRoleProvider getRoleProvider()
 * @method array getRoles(array $roleIds = [])
 * 
 */
class Acl extends Facade {
	
	protected static function getFacadeAccessor() { return 'Acl'; }
	
}
