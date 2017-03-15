<div class="users view">
<h2><?php echo __('User'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($user['User']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Username'); ?></dt>
		<dd>
			<?php echo h($user['User']['username']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Password'); ?></dt>
		<dd>
			<?php echo h($user['User']['password']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Role'); ?></dt>
		<dd>
			<?php echo h($user['User']['role']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit User'), array('action' => 'edit', $user['User']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete User'), array('action' => 'delete', $user['User']['id']), array('confirm' => __('Are you sure you want to delete # %s?', $user['User']['id']))); ?> </li>
		<li><?php echo $this->Html->link(__('List Users'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New User'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Staff'), array('controller' => 'staff', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Staff'), array('controller' => 'staff', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Related Staff'); ?></h3>
	<?php if (!empty($user['Staff'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Staff Id'); ?></th>
		<th><?php echo __('Staff First Name'); ?></th>
		<th><?php echo __('Staff Last Name'); ?></th>
		<th><?php echo __('Staff Pref Location'); ?></th>
		<th><?php echo __('Staff Skills'); ?></th>
		<th><?php echo __('Staff Type'); ?></th>
		<th><?php echo __('Staff Salary'); ?></th>
		<th><?php echo __('Staff Personal Statement'); ?></th>
		<th><?php echo __('User Id'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($user['Staff'] as $staff): ?>
		<tr>
			<td><?php echo $staff['staff_id']; ?></td>
			<td><?php echo $staff['staff_first_name']; ?></td>
			<td><?php echo $staff['staff_last_name']; ?></td>
			<td><?php echo $staff['staff_pref_location']; ?></td>
			<td><?php echo $staff['staff_skills']; ?></td>
			<td><?php echo $staff['staff_type']; ?></td>
			<td><?php echo $staff['staff_salary']; ?></td>
			<td><?php echo $staff['staff_personal_statement']; ?></td>
			<td><?php echo $staff['user_id']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'staff', 'action' => 'view', $staff['staff_id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'staff', 'action' => 'edit', $staff['staff_id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'staff', 'action' => 'delete', $staff['staff_id']), array('confirm' => __('Are you sure you want to delete # %s?', $staff['staff_id']))); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Staff'), array('controller' => 'staff', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
